<?php
/* Smarty version 3.1.38, created on 2021-02-22 00:29:12
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\gameDown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6032ecc8927968_03976894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abb7b8b9c65127c40631d1ff5f7e9e9df25519ae' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\gameDown.html',
      1 => 1613950088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032ecc8927968_03976894 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../css/pages.css">
<br><form action="../../../nrgame/frontEnd/templates/index.html" method="POST">
    <button style="margin:auto;
    display:block;
    height:3em;
    width:8em;
    background-color: red;
    border-radius: .25rem;
    border-color: red;
    font-weight: bold;"
    type="submit" class="backButton">EXIT</button><br>
</form>

<form action="../help.html" method="POST">
    <button style="position: fixed;
	left: 5%;
	bottom: 5%;
	border-radius: 50%;
	padding: 20px 30px;
	background-color: blue;
	border-color: blue;
	font-size: 40px;
	font-weight: bold;" type="submit" class="helpButton" ><b>?</b></button><br>
</form><?php }
}
