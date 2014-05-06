<?php

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
<title> Login </title>
</head>

<body>
	<h1>Login</h1>
	<form type="get" action="<?php echo url('userverify'); ?>">
		<label>User Name: </label> <input type="text" name="user"> <br />
		<label>Password: </label> <input type="password" name="password"> <br />

		<input type="submit" value="Login">
	</form>

	<br />
	<br />
	<a href="<?php echo url('rottentomatoes/search'); ?>"> Search Movies </a>
	<p>Not Registered? <a href="<?php echo url('sign-up');?>">Sign Up!</a> </p>
</body>

</html>