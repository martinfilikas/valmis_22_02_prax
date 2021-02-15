<?php
/* Smarty version 3.1.38, created on 2021-02-07 00:19:52
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\GamingScreen.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601f2418c2d381_60681260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b2c53f727119c840bd210a09c25c849635cbdc' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\GamingScreen.html',
      1 => 1612653590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601f2418c2d381_60681260 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../css/Pages.css">

<form method="POST">
    <p> You are playing against AI </p>

    <p> Lets see if your guess matched with AI </p>

    <p> Your name: <?php echo $_smarty_tpl->tpl_vars['firstLast']->value;?>
 </p>

    <div> Guess a number between 1-100: <label>
        <input type="text" name="guess">
    </label> <br> <br>

    <div> You guessed: <?php echo $_smarty_tpl->tpl_vars['usersGuess']->value;?>
 </div> <br>

    <div> Number of guesses: <?php echo $_smarty_tpl->tpl_vars['numberOfGuesses']->value;?>
  </div> <br>

    <div> <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
  </div>

<!--    <div> Random number: <?php ob_start();
echo $_smarty_tpl->tpl_vars['randomNum']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
  </div>-->

    <input type="hidden" name="firstName" value=<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
>
        <br> <br><input type="submit" name="submit" class="submitButton"> </div>
</form><?php }
}
