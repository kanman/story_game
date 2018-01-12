<?php
session_start();

$word1 = htmlspecialchars($_SESSION['word'][1]);
$word2 = htmlspecialchars($_SESSION['word'][2]);
$word3 = htmlspecialchars($_SESSION['word'][3]);
$word4 = htmlspecialchars($_SESSION['word'][4]);
$word5 = htmlspecialchars($_SESSION['word'][5]);


include('inc/header.php');
include('inc/styles.php');

echo '<div class="jumbotron jumbotron-fluid text-white">';
echo '<div class="container-fluid text-center">';

echo "<h1 class='display-4 text-center mb-4'>My Funny Story</h1>";


echo '<br/>';

echo '<div class="container">';
echo '<div class="alert alert-success pt-4 mb-4">';
echo '<h3 class="text-center">There once was a ' . '<em>' . $word1 . '</em>';
echo ' frog named ' . '<em>' . $word2 . '</em>'; 
echo '. </h3>';
echo '<h3 class="text-center">This ' . '<em>' . $word3 . '</em>'; 
echo ' dancer went to Ballet school to learn to ' . '<em>' . $word4 . '</em>' ;
echo ' the ' . '<em>' . $word5 . '</em>' . '.</h3>';
echo '<br/>';

echo '</div>';

echo '</div>';



echo '<a class="btn btn-outline-light btn-lg m-3" role="button" href="inc/cookie.php?save">Save Story</a>';
echo ' <a class="btn btn-outline-light btn-lg m-3" role="button" href="play.php">Play Again</a>';
echo ' <a class="btn btn-outline-light btn-lg m-3" role="button" href="index.php">Other Stories</a>';

echo '</div>';
echo '</div>';


include('inc/footer.php');