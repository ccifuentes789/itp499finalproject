<?php
Session::regenerate();
$value = Session::get('adminname');

if(empty($value)){
	header('Location: login');
	exit();
}
//dd($value);
echo "<h1> $value </h1>";

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/style1.css">
<title> User List </title>
</head>

<body>
<h1> User List </h1>

<table border="1">
	<tr>
		<th>Username</th>
		<th>Admin</th>
		<th>Fav. Movie </th>
		<th>Rating </th>
		<th>Edit </th>
		<th>Remove </th>
	</tr>



	<?php
	 foreach($accounts as $account) :?>
	<tr>
		<td> <?php echo $account->username; ?> </td>
		<td> 
			<?php if($account->admin == "1"){
				echo 'Yes';
			}
			else{
				echo 'No';
			}

			?> 
		</td>
		<td> <?php echo $account->movietitle; ?>  </td>
		<td> <?php echo $account->rating; ?> </td>
		<td><a href="edit-user?id=<?php echo $account->userID; ?>"> Edit</a></td>
		<td><a href="remove-user?id=<?php echo $account->userID; ?>"> Remove</a></td>
	</tr>



	<?php endforeach; ?>


</table>

<br />

<a href="<?php echo 'add-user';?>" > Add user </a> <br />
<a href="<?php echo 'logout'; ?> "> Logout </a>
</body>
</html>