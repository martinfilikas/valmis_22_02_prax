<?php
/* Smarty version 3.1.38, created on 2021-02-03 14:39:50
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\TooManyTriesForm.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601aa7a6e97636_87456158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a70c3636d8b1fafbce566be6baa57e7731130f8' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\TooManyTriesForm.php',
      1 => 1612359310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601aa7a6e97636_87456158 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>
//include '../../backEnd/Game.php' <?php echo '?>';?>

<form action="../highScores.php" method="POST">
    Sorry <?php echo '<?php ';?>
echo $_SESSION["firstName"] . " " .$_SESSION["lastName"] <?php echo '?>';?>
!<br>
    You have tried too many times! Better luck next time!<br>

    <br><br>
    <input type="submit" value="Go to scoreboard" style=" margin:auto;
display:block;
height:3em;
width:15em;
background-color: greenyellow;
border-radius: .25rem;
border-color: greenyellow;
font-weight: bold;">
</form><?php }
}
