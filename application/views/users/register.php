<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
<h2><?php echo $title; ?></h2>
<form method="post">
	<div class="cellSpace">
		<input type="text" name="name" placeholder="enter name" value="<?php echo !empty($user['name'])?$user['name']:''; ?>"  />
		<?php echo form_error('name', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="cellSpace">
		<input type="text" name="email" placeholder="enter email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" />
		<?php echo form_error('email', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="cellSpace">
		<input type="text" name="location" placeholder="enter location" />
	</div>
	<div class="cellSpace">
		<input type="text" name="password" placeholder="enter password"  />
		<?php echo form_error('password', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="cellSpace">
		<input type="text" name="cpassword" placeholder="confirm password"  />
		<?php echo form_error('cpassword', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>

	<div class="cellSpace">
		<?php
		if(!empty($user['gender']) && $user['gender']=='Male'){
			$mcheck='checked="checked"';
			$fcheck='';
		}elseif (!empty($user['gender']) && $user['gender']=='Female') {
			$fcheck='checked="checked"';
			$mcheck='';
		}

		else{
			$fcheck='';
			$mcheck='';
		}

		?>
		<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>/>Male
	    <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>/>Female
	</div>
	<div class="cellSpace">
		<input type="submit" name="submit" value="submit" />
	</div>
	<div>
		<span>Already have an account? click <a href="<?php echo base_url(); ?>index.php//users/login">here</a> to login.</span>
	</div>
</form>
</body>
<style type="text/css">
.cellSpace {
  margin-top:10px;
  position: relative;
}
</style>
</html>