<?php echo "<link rel='stylesheet' type='text/css' href='../frontEnd/css/Pages.css'>";?>
<?php include '../../nrgame/frontEnd/templates/GameStyling.html'; ?>
<?php session_start(); ?>

<?php

// $_POST to get the username and password from the user and do your validation.
// $_SESSION to remember that the user is already logged in so that when they go to another
// page they don't have to keep re-entering their username and password

if (isset($_POST['firstName'])){
    $firstName = $_SESSION["firstName"] = $_POST['firstName'];
}
$usersGuess = isset($_POST['guess']) ? $_POST['guess'] : '';

$_SESSION["gameOver"] = false;

$answer = "";

$gameFailed = false;

include_once '../../nrgame/smarty_php/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->cache_lifetime = 120;


if ($usersGuess != NULL && $usersGuess < $_SESSION["randomNumber"])
{

           $answer = "<span style=\"color: blue; \">Your guess was: Too Low</span>";

            $_SESSION["numberOfGuesses"] += 1;

            $_SESSION["failed"] = false;

}

elseif ($usersGuess != NULL && $usersGuess > $_SESSION["randomNumber"])
{

            $answer = "<span style=\"color: red; \">Your guess was: Too High</span>";

            $_SESSION["numberOfGuesses"] += 1;

            $_SESSION["failed"] = false;

}

elseif ($usersGuess != NULL && $usersGuess == $_SESSION["randomNumber"])
{

            $answer = "<span style=\"color: green; \">Your guess was: CORRECT !</span>";

            ++$_SESSION["numberOfGuesses"];

            $_SESSION["gameOver"] = true;

            $_SESSION["failed"] = false;
}
?>


<?php if(isset($_SESSION["numberOfGuesses"]) &&  $_SESSION["numberOfGuesses"] > 50) : ?>
    <?php header("Location: FailedGame.php");
    include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ;
    exit(); ?>
<?php endif;?>


<?php if($_SESSION["gameOver"]) :?>
    <?php include '../../nrgame/backEnd/GameWon.php'?>
<?php endif;?>


<?php if(!$_SESSION["gameOver"]) : ?>
<?php include_once '../../nrgame/smarty_php/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->cache_lifetime = 120;
$smarty->assign("firstLast", $_SESSION["firstName"] . " " .$_SESSION["lastName"]);
$smarty->assign("numberOfGuesses", $_SESSION["numberOfGuesses"]);
$smarty->assign("usersGuess", $usersGuess);
$smarty->assign("firstName", $_POST['firstName']);
$smarty->assign("firstName", $_POST['firstName']);
$smarty->assign("answer", "$answer");
$smarty->display('../../../nrgame/frontEnd/templates/GamingScreen.html');
?>
<?php endif;?>

<?php include '../../nrgame/frontEnd/templates/GameDown.html' ; ?>
