<?php
/* Smarty version 3.1.38, created on 2021-02-11 18:52:18
  from 'E:\Xamp\htdocs\nrgame\backEnd\FailedGame.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60256ed2c0ba81_33457517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24128e874b39759630e2450b39137d3986adb498' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\backEnd\\FailedGame.php',
      1 => 1613065798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60256ed2c0ba81_33457517 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../../nrgame/frontEnd/css/Pages.css">

<form method="POST">
    <p> You failed: <?php echo $_smarty_tpl->tpl_vars['firstLast']->value;?>
 </p>



<!--        <input type="hidden" name="firstName" value=<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
>-->
<!--        <br> <br><input type="submit" name="submit" class="submitButton"> </div>-->
</form>
<?php }
}
