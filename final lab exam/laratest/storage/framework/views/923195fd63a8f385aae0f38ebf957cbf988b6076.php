<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
		<!-- <?php echo csrf_field(); ?> -->
		<!-- <?php echo e(csrf_field()); ?> 
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
-->
		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

		<!--<h3 style="color: red">
			<?php echo e(session('msg')); ?>

		</h3>-->
	</form>
</body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\laratest\resources\views/login/index.blade.php ENDPATH**/ ?>