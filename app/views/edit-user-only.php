<?php

$id = Input::get('id');
//echo $id;

$ratingQuery = DB::table('ratings')
            ->select('id', 'rating');



 $ratings = $ratingQuery->get();



 $userQuery = DB::table('users')
 		->select('username', 'admin', 'password', 'rating', 'userID', 'movietitle')
          ->join('ratings', 'users.rating_id', '=', 'ratings.id')
          ->where('userID', '=', "$id");
 $user = $userQuery->get();
//dd($user);

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
<title> Edit User </title>
</head>

<body>
	<h1>Edit User</h1>
	<form type="get" action="<?php echo url('edituseronly'); ?>">
		<input type = "hidden" name="id" value="<?php echo $id; ?>" />
		<label>User Name: </label> <input type="text" name="user" value = "<?php echo $user[0]->username;  ?>"> <br />
		<label>Password: </label> <input type="text" name="password" value = "<?php echo $user[0]->password; ?>"> <br />
		<label>Movie Title: </label> <input type="text" name="movietitle" value = "<?php echo $user[0]->movietitle; ?>"> <br />
		<label> Rating: </label>
		<select name = "rating">
			<?php

			foreach($ratings as $rating){

				if ($rating->rating == $user[0]->rating) {

					echo "<option value='$rating->id' selected='1' >$rating->rating </option>";
				}
				else{
					echo "<option value = $rating->id> $rating->rating </option>";
				}
			}
			?>
		</select>
		<br />


		<input type="submit" value="Submit">
	</form>


</body>

</html>