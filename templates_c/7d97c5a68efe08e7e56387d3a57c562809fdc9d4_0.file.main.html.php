<?php
/* Smarty version 3.1.38, created on 2021-02-16 16:17:53
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602be221253b65_94094855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d97c5a68efe08e7e56387d3a57c562809fdc9d4' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\main.html',
      1 => 1613488673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../nrgame/frontEnd/templates/game.html' => 1,
    'file:../../../nrgame/frontEnd/templates/GameDown.html' => 1,
  ),
),false)) {
function content_602be221253b65_94094855 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Gaming Screen-->
<!DOCTYPE html>
<html lang="en">
<header >
    <link rel='stylesheet' type='text/css' href='../../../nrgame/frontEnd/css/Pages.css'>
</header>
<body style="background: powderblue; text-align:center; padding-top: 15%;">
<form method="POST" action="../../../nrgame/index.php">
    <?php $_smarty_tpl->_subTemplateRender('file:../../../nrgame/frontEnd/templates/game.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../nrgame/frontEnd/templates/GameDown.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <input type="hidden" name="flowControl" value=<?php echo $_smarty_tpl->tpl_vars['flowControl']->value;?>
>
</form>
</body>
</html><?php }
}
