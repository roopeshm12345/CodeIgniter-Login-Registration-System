<div>
<?php
if (!empty($success_msg)) {
	# code...
	echo $success_msg;
}elseif (!empty($error_msg)) {
	# code...
	echo $error_msg;
}
?>
</div>
<form method="post" action="">
	<div class="cellSpace">
	<input type="text" name="username" placeholder="email"/>
	</div>

	<div class="cellSpace">
		<input type="password" name="password" placeholder="password" />
	</div>

	<div class="cellSpace">
		<input type="submit" name="login" value="login"/ >
	</div>

	<div>
		<span>Don't have an account? click <a href="<?php echo base_url(); ?>index.php//users/register">here</a> to register for free.</span>
	</div>

	
</form>

<style type="text/css">
.cellSpace {
  margin-top:10px;
  position: relative;
}
</style>