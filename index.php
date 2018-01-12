<?php include('inc/header.php');
include('inc/styles.php'); 

include('inc/footer.php');

echo '<body>';
echo '<div class="jumbotron jumbotron-fluid bg-success text-white">';
echo '<div class="container-fluid text-center">';
echo '<h1 class="display-4 mb-4">Welcome to <br/>School Story Game</h1>';
echo '<h3 class="mb-5">Learn all about nouns, adjectives, and verbs while you create your own funny story</h3>';
echo '<a href="play.php"><button type="button" class="btn btn-outline-light btn-lg mb-5" >Play the story game</button></a>';


echo '<p class="lead mb-4">';

echo '<h2>Re-read your Saved Stories:</h2>';






//Read the cookie and show cookie on the welcome page

if(isset($_COOKIE)) {
foreach($_COOKIE as $key => $value) {

if($key != 'PHPSESSID') {
echo '<br/>';
echo '<div class="form-group">';
echo '<a class="btn btn-outline-light btn-lg" href="inc/cookie.php?read=' . urlencode($key) . '">';


//Display the name and the formatted date instead of timestamp alone.//Get the name only
echo substr($key, 0, -10); 
echo ' ';
}    

echo '</a>';

echo '<a class="btn btn-light" href="inc/cookie.php?delete=' . urlencode($key) . '">';
echo 'X</a>';
echo '</div>';
        }
}

echo '</div>';
echo '</div>';
echo '</body>';


