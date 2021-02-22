<?php
session_start();
include_once '../nrgame/smarty_php/libs/Smarty.class.php';
require_once '../nrgame/backEnd/logic.php';

$smarty = new Smarty;
$smarty->cache_lifetime = 120;

$args = ["firstName", "numberOfGuesses", "guess", "gameOver", "result", "flowControl", "randomNumber"];
$vars = [];
foreach ($args as $arg){
    $vars[$arg] = isset($_REQUEST[$arg]) ? $_REQUEST[$arg] : "";
}

$ret = gameTurn($vars["numberOfGuesses"], $vars["guess"], $vars["randomNumber"],$vars["gameOver"], $vars["flowControl"]);
$vars["numberOfGuesses"] = $ret["numberOfGuesses"];
$vars["result"] = $ret["result"];
$vars["flowControl"] = $ret["flowControl"];

foreach ($args as $arg){
    $smarty->assign($arg, $vars[$arg]);
}
$smarty->display('../nrgame/frontEnd/templates/main.html');
?>




