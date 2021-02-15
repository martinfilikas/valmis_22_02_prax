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




