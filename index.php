<?php
session_start();
include_once '../nrgame/smarty_php/libs/Smarty.class.php';
require_once '../nrgame/backEnd/logic.php';

$smarty = new Smarty;
$smarty->cache_lifetime = 120;

$firstName = $_SESSION["firstName"];
$numberOfGuesses = $_SESSION["numberOfGuesses"];
$randomNumber = $_SESSION["randomNumber"];
$gameOver = $_SESSION["gameOver"];
$result = isset($_SESSION["result"]) ? $_SESSION["result"] : "" ;
$flowControl = isset($_SESSION["flowControl"]) ? $_SESSION["flowControl"] : "";
$guess = isset($_SESSION["guess"]) ? $_SESSION["guess"] : "";

$ret = gameTurn($numberOfGuesses, $guess, $randomNumber);
$numberOfGuesses = $ret["numberOfGuesses"];
$result = $ret["result"];

$smarty->assign("firstName", $firstName);
$smarty->assign("numberOfGuesses", $numberOfGuesses);
$smarty->assign("guess", $guess);
$smarty->assign("gameOver", $gameOver);
$smarty->assign("result", $result);
$smarty->assign("flowControl", $flowControl);
$smarty->assign("randomNumber", $randomNumber);

$smarty->display('../nrgame/frontEnd/templates/main.html');



?>



<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<body style="background: powderblue">-->
<!--<link rel="stylesheet" href="frontEnd/css/MainScreen.css">-->
<!---->
<!--<h1 class="welcome">Welcome to number guessing game</h1>-->
<!---->
<!--<form action="backEnd/UserInformation.php" method="POST">-->
<!--<button  type="submit" class="playButton"><b>PLAY</b></button><br>-->
<!--</form>-->
<!---->
<!--<form action="backEnd/HighScores.php" method="POST">-->
<!--<button type="submit" class="scoreBoardButton"><b>SCOREBOARD</button><br>-->
<!--</form>-->
<!---->
<!--<form action="frontEnd/Exit.html" method="POST">-->
<!--    <button type="submit" class="exitButton"><b>EXIT</b></button><br>-->
<!--</form>-->
<!---->
<!--<form action="frontEnd/Help.html" method="POST">-->
<!--    <button style="position: fixed;-->
<!--	left: 5%;-->
<!--	bottom: 5%;-->
<!--	border-radius: 50%;-->
<!--	padding: 20px 30px;-->
<!--	background-color: blue;-->
<!--	border-color: blue;-->
<!--	font-size: 40px;-->
<!--	font-weight: bold;" type="submit" class="helpButton" ><b>?</b></button><br><b></b><br>-->
<!--</form>-->
<!---->
<!--<form action="frontEnd/Authors.html" method="POST">-->
<!--<button type="submit" class="authorsButton"><b>AUTHORS</b></button><br>-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->

