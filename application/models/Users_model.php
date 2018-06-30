<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {


	public function fetch_data($id=array()){
		$this->db->where('id', $id['id']);
		return $this->db->get('users')->row();
	}


	public function login($lg=array()){
		$uname=$lg['username'];
		$pword=$lg['password'];

		$where="email='$uname' and password='$pword'";
		$this->db->where($where);
		if($this->db->count_all_results('users')==1){
			return $this->db->get('users')->row();
		}else{
			return false;
		}

	}
	public function registeration($user_data=array()){
		if(!array_key_exists("created", $user_data)){
			$user_data['created']=date("Y-m-d H:i:s");
		}
		$ins=$this->db->insert('users', $user_data);
		if ($ins) {
			$insert_id=$this->db->insert_id();
			return $insert_id;
			# code...
		}else
		{
			return false;
		}
	}
	public function existed_email($str){
		//echo $str;exit;
		$this->db->where('email', $str);
		if($this->db->count_all_results('users')==1){
			return true;
		}else{
			return false;
		}		

		}
}
