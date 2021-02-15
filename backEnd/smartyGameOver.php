<?php
include_once '../../nrgame/smarty_php/libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->cache_lifetime = 120;

$smarty->assign("firstLast", $_SESSION["firstName"]);

$smarty->display('../../nrgame/backEnd/GameOver.php');