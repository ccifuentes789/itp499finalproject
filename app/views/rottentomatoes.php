<html>
<head>
	<title>Rotten Tomatoes Results</title>
	<link rel="stylesheet" type = "text/css"  href="/css/style1.css" >
</head>
<body>
<h1> Rotten Tomatoes Results </h1>

<?php
Cache::add('movies', $movies, 20);
foreach($movies as $movie) :?>
	<div class="movies">
	

		<span style="font-size: 18px;"> <?php echo "<b>$movie->title</b>" ?></span> <br /> 
		<?php $image = $movie->posters->detailed; ?>
		<img src="<?php echo $image ?>" /> <br />
		<b>Rating: </b>
		
		<?php echo $movie->mpaa_rating ?> <br />

		<b>Year: </b>
		<?php echo $movie->year ?> <br />

		<b>Runtime: </b>
		<?php echo $movie->runtime ?> minutes <br />

		<b>Critic Rating: </b>
		<?php 

		if($movie->ratings->critics_score >=0){
			$freshness = $movie->ratings->critics_rating;
			$criticScore = $movie->ratings->critics_score;
			
			if($freshness ==="Fresh"){
				echo "<span style='color: orange;' >$freshness </span>";
			}
			if($freshness === "Certified Fresh"){
				echo "<span style='color: green;' >$freshness </span>";
			}
			if($freshness === "Rotten"){
				echo "<span style='color: red;' >$freshness </span>";
			}
			echo "$criticScore/100";
		}
		else{
			echo "N/A";
		}

		?> <br />


		<b>User Rating: </b>
		<?php 
		$audienceScore = $movie->ratings->audience_score; 

		echo "$audienceScore/100";
		?>  <br />

	



	</div>

<?php endforeach; ?>

</body>

</html>