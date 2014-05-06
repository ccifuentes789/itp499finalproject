<?php
Session::regenerate();
$user = Session::get('username');
$id = Session::get('userID');

if(empty($user) ){
	header('Location: login');
	exit();
}
//dd($value);
echo "<h1> $user </h1>";
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

	</tr>



	<?php endforeach; ?>


</table>

<br />

<a href="edit-user-only?id=<?php echo $id; ?>"> Edit</a> <br />
<a href="<?php echo 'logout'; ?> "> Logout </a>
</body>
</html>