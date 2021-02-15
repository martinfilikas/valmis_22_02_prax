<?php
/* Smarty version 3.1.38, created on 2021-01-31 15:15:51
  from 'E:\Xamp\htdocs\nrgame\backEnd\GamingScreen.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6016bb97207063_62275324',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'a1a03e496bb25c0d124250fa683b54008e4f2812' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\backEnd\\GamingScreen.html',
      1 => 1612102446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6016bb97207063_62275324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17460684276016bb971d2ef3_88671916';
?>
<form method="POST">
    <p> You are playing against AI </p>
    <p> Lets see if your guess matched with AI </p>
    <p> Your name: <?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo $_smarty_tpl->tpl_vars[\'firstLast\']->value;?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
 </p> <br>
    <div> Guess a number between 1-100: <input type="text" name="guess">
        <input type="submit" name="submit"> </div> <br>
    <div> You guessed: <?php echo $_smarty_tpl->tpl_vars['usersGuess']->value;?>
 </div> <br>
    <div> Number of guesses: <?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo $_smarty_tpl->tpl_vars[\'numberOfGuesses\']->value;?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
  </div> <br>
<!--    <div> Random number: <?php ob_start();
echo $_smarty_tpl->tpl_vars['randomNum']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
  </div>-->

    <input type="hidden" name="firstName" value="<?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
 $_POST['firstName'] <?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
">
    <input type="hidden" name="lastName" value="<?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo \'<?=\';?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
 $_POST['lastName'] <?php echo '/*%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:17460684276016bb971d2ef3_88671916%%*/';?>
">
</form><?php }
}
