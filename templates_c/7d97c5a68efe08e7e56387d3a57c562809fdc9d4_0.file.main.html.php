<?php
/* Smarty version 3.1.38, created on 2021-02-22 18:03:24
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6033e3dcac3037_33363057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d97c5a68efe08e7e56387d3a57c562809fdc9d4' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\main.html',
      1 => 1614013403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../nrgame/frontEnd/templates/game.html' => 1,
    'file:../../../nrgame/frontEnd/templates/gameDown.html' => 1,
  ),
),false)) {
function content_6033e3dcac3037_33363057 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Gaming Screen-->
<!DOCTYPE html>
<html lang="en">
<header >
    <link rel='stylesheet' type='text/css' href='../../../nrgame/frontEnd/css/pages.css'>
</header>
<body style="background: powderblue; text-align:center; padding-top: 15%;">
<form method="POST" action="../../../nrgame/index.php">
    <?php $_smarty_tpl->_subTemplateRender('file:../../../nrgame/frontEnd/templates/game.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <br>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../nrgame/frontEnd/templates/gameDown.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <input type="hidden" name="flowControl" value=<?php echo $_smarty_tpl->tpl_vars['flowControl']->value;?>
>
</form>
</body>
</html><?php }
}
