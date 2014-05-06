<?php

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
<title> Sign Up </title>
</head>

<body>
	<h1>Sign Up</h1>
	<form type="get" action="<?php echo url('signupprocess'); ?>">
		<label>User Name: </label> <input type="text" name="user"> <br />
		<label>Password: </label> <input type="password" name="password"> <br />


		<input type="submit" value="Submit">
	</form>


</body>

</html>