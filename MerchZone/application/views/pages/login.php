<div>
	<?php if (isset($account_created)) { ?>
		<h3><?php echo $account_created; ?></h3>
	<?php } else { ?>
		<h1>Login, please</h1>
	<?php } ?>
	<form method="post" action="">
		<label for="uName">User Name</label>
		<input type="text" name="uName" placeholder="User Name">
		<label for="pass">Password</label>
		<input type="text" name="pass" placeholder="Password">
		<input type="submit" name="" value="Login">
	</form>
</div>