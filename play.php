<?php 

session_start();


$total = 5;
$page = 1;
$page = filter_input(INPUT_GET, 'p' , FILTER_SANITIZE_NUMBER_INT);

if(empty($page)) {
//$_SESSION['word'][1] = '';
//unset($_SESSION['word'][2]);
session_destroy();  
$page = 1;    
}


//Capturing input data in a session variable

if(isset($_POST['word'])) {
$_SESSION['word'][$page-1] = filter_input(INPUT_POST, 'word', FILTER_SANITIZE_STRING); 
}

//Conditional - Once the player has completed the 5 steps of the form, they are re-directed to the story page.
if($page > $total) {
header('location: story.php');
exit;
} 

include('inc/header.php');

include('inc/styles.php');


echo '<div class="jumbotron jumbotron-fluid text-white">';
echo '<div class="container-fluid text-center">';

echo "<h1 class='display-4 text-center mb-4'>Step $page of $total</h1>";



echo '<form method="post" action="play.php?p='.($page+1) . '">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg">';
echo '<div class = "form-group mb-4">';


switch ($page) {

case 2: 
echo '
<label class="control-label h3 mb-5" for="word">Enter the <em>name</em> of somebody</label>
<input class="form-control form-control-lg" type="text" name="word" id="word" placeholder="Name">
';
break;

case 3:
echo '
<label class="control-label h3 mb-5" for="word">Enter a <em>verb</em> ending in -ing</label>
<input class="form-control form-control-lg" type="text" name="word" id="word" placeholder="verb-ing">
<h4 class="my-5">A verb is a word used to describe an action, state, or occurrence.</p>
';

break;

case 4:
echo '
<label class="control-label h3 mb-5" for="word">Enter a <em>verb</em></label>
<input class="form-control form-control-lg" type="text" name="word" id="word" placeholder="verb">
<h4 class="my-5">An verb is a word used to describe an action, state, or occurrence.</p>
';

break;

default:



echo '
<label class="control-label h3 mb-5" for="word">Enter a <em>noun</em></label>
<input class="form-control form-control-lg" type="text" name="word" id="word" placeholder="noun">
<h4 class="my-5">A noun is a name of an object or person.</h4>
';

break;
}
echo '</div>
  <button type="submit" class="btn btn-default btn-lg">Add your word</button>
</form>
';

echo '</div>';
echo '</div>';

include('inc/footer.php');

