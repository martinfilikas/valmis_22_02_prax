<?php
/* Smarty version 3.1.38, created on 2021-01-31 15:25:57
  from 'E:\Xamp\htdocs\nrgame\backEnd\GamingScreen.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6016bdf5cd92f9_11544039',
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
  'cache_lifetime' => 120,
),true)) {
function content_6016bdf5cd92f9_11544039 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
    <p> You are playing against AI </p>
    <p> Lets see if your guess matched with AI </p>
    <p> Your name: <?php echo $_smarty_tpl->tpl_vars['firstLast']->value;?>
 </p> <br>
    <div> Guess a number between 1-100: <input type="text" name="guess">
        <input type="submit" name="submit"> </div> <br>
    <div> You guessed: 66 </div> <br>
    <div> Number of guesses: <?php echo $_smarty_tpl->tpl_vars['numberOfGuesses']->value;?>
  </div> <br>
<!--    <div> Random number: <br />
<b>Notice</b>:  Undefined index: randomNum in <b>E:\Xamp\htdocs\nrgame\backEnd\templates_c\a1a03e496bb25c0d124250fa683b54008e4f2812_0.file.GamingScreen.html.cache.php</b> on line <b>40</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>E:\Xamp\htdocs\nrgame\backEnd\templates_c\a1a03e496bb25c0d124250fa683b54008e4f2812_0.file.GamingScreen.html.cache.php</b> on line <b>40</b><br />
  </div>-->

    <input type="hidden" name="firstName" value="<?php echo '<?=';?>
 $_POST['firstName'] <?php echo '?>';?>
">
    <input type="hidden" name="lastName" value="<?php echo '<?=';?>
 $_POST['lastName'] <?php echo '?>';?>
">
</form><?php }
}
