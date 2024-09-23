<!DOCTYPE html>
<html lang = "en">
<head>
	
	<meta charset = "utf-8" />
	<title>Graeme Query1</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/queries.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Link to google fonts to style my texts -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Magra:wght@400;700&family=Michroma&family=Monda:wght@400..700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
	</style>
</head>

<body style = "background-color:#4B6172;">
	<div class ="main_container">
	<?php
	//Pulls the links from the nav.php page and places them in the navigation div
	require "nav-graeme.php" //'require' is 100% needed for the site to run 
	?>
	<?php
	//Pulls the links from the nav.php page and places them in the navigation div
	require "nav_admin.php" //'require' is 100% needed for the site to run 
	?>

				<div class="title"><!-- Holds the page title -->
					<h1 style = "padding-top:30px;padding-bottom:60px;font-size:40px;letter-spacing: 2px; color:#9CCDFB;"><center>MUSIC QUERY 1</center></h1>
				</div>
<div class = "headings2">
	<div class = "headings2b">Title</div>
	<div class = "headings2b">Artist</div>
	<div class = "headings2b">Duration</div>
	<div class = "headings2b">Track</div>
	<div class = "headings2b">Genre</div>
	<div class = "headings2b">Album</div>
</div>
<?php

$conn = new mysqli('localhost', '_WardaJ', '2gAHU60eiJpIwM9Q', 'WardaJ_13CSI_Database_Assessment');

/* If its not working it will show a "die" message.*/
if (! $conn){
	die("Connection failed" . mysqli_connect_error());
}
/* Creating a query which will check where the user name is being inputed*/
$checkquery = "SELECT song_details.Title, artist.Artist, song_details.Duration, song_details.Track, genre.Genre, album.Album
FROM song_details
INNER JOIN song2artist ON song2artist.Song_ID = song_details.Song_ID
INNER JOIN artist ON artist.Artist_ID = song2artist.Artist_ID
INNER JOIN song2genre ON song2genre.Song_ID = song_details.Song_ID
INNER JOIN genre on genre.Genre_ID = song2genre.Genre_ID
INNER JOIN album ON album.Album_ID = song_details.Album_ID
ORDER BY song_details.Title DESC, artist.Artist DESC";
$result3 = mysqli_query($conn, $checkquery); 
while($output = mysqli_fetch_assoc($result3)){
	
	/* This is the code to display all the inputs for each of the placeholders */
	?>


	<div class = "flex-container">
					<div class = "flex-item"><p><?php echo $output['Title']; ?></p></div>
					<div class = "flex-item"><p><?php echo $output['Artist']; ?></p></div>
					<div class = "flex-item"><p><?php echo $output['Duration']; ?></p></div>
					<div class = "flex-item"><p><?php echo $output['Track']; ?></p></div>
					<div class = "flex-item"><p><?php echo $output['Genre']; ?></p></div>
					<div class = "flex-item"><p><?php echo $output['Album']; ?></p></div>
	</div>

				<?php
}

mysqli_close($conn);
?>
		
<!--Javascript for burger Menu responsive design-->
<script>
function burgermenu() {
  var x = document.getElementById("navbar11");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
		
<div class="footer"><!-- Holds the foot notes -->
	<p>&copy;Copyright Warda Jabbar 2024</p>
</div>
	</div>
		</body>
</html>
