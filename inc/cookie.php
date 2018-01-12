<?php
session_start();

//Building the "Save Story" component of the 
//Writing a cookie

//1. Create a URL parameter for our cookie and conditional to test if the link has been clicked - cookie.php?save.  
//2. Create a variable for our input data. $name
//3. Set a cookie to the input data, creating an array and setting an expiration time.
//4. After set, redirect to the home page of the app and exit.
//5. If the user reaches the cookie 'read' URL, split the cookie string into it's individual values and update the session variables

//Notes:

//Implode creates an array from our session variables. You can also add JSON in here, or 
//create an array from the cookie variable by adding in [].
//Add in an expiration 'time' function for the cookie as well, otherwise it will expire when the session closes.
//Add in the strtotime function to specify expiration time.
//Set the path of the cookie to your root folder.
//Explode splits a string into it's individual values.



if(isset($_GET['save'])) {
$name = urlencode($_SESSION['word'][2]) . time();
setcookie($name, implode(':' , $_SESSION['word']), strtotime('+30 days'), '/');

} elseif (isset($_GET['read'])) {
$_SESSION['word'] = array_combine(range(1,5), explode(':', $_COOKIE[$_GET['read']]));
header("location: /story.php");
exit;


} elseif(isset($_GET['delete'])) {
setcookie($_GET['delete'],' ', time(), '/' );
}    

header('location: /index.php');
exit;

$treehouse = urlencode($_SESSION['cookie challenge']) .time();
setcookie($treehouse, implode(':' , $_SESSION['cookie challenge']), strtotime('+60 minutes'), '/');


$treehouse = urlencode($_SESSION['cookie challenge']) . time();
setcookie($treehouse, implode(':' , $_SESSION['cookie challenge']), strtotime('+3600'), '/');





