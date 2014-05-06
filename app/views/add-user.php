<?php

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
<title> Add User </title>
</head>

<body>
	<h1>Add User</h1>
	<form type="get" action="<?php echo url('adduserprocess'); ?>">
		<label>User Name: </label> <input type="text" name="user"> <br />
		<label>Password: </label> <input type="text" name="password"> <br />


		<input type="submit" value="Submit">
	</form>


</body>

</html>