<?php
/* Smarty version 3.1.38, created on 2021-02-22 18:01:07
  from 'E:\Xamp\htdocs\nrgame\frontEnd\templates\game.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6033e3530d05a5_91309280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102460d52d00d07a6f78ce9a5d8eb99610c1a44a' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\frontEnd\\templates\\game.html',
      1 => 1614013265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6033e3530d05a5_91309280 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <p> You are playing against AI </p>

    <p> Lets see if your guess matched with AI </p>

    <p> Your name: <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 </p>

    <div> Guess a number between 1-100: <label>
        <input type="text" name="guess">
    </label> <br> <br>

        <div> You guessed: <?php echo $_smarty_tpl->tpl_vars['guess']->value;?>
 </div> <br>

        <div> Number of guesses: <?php echo $_smarty_tpl->tpl_vars['numberOfGuesses']->value;?>
  </div> <br>
        <div> <?php if ($_smarty_tpl->tpl_vars['result']->value == true) {?>
            <span style="color: green; ">Your guess was: CORRECT !</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['guess']->value > $_smarty_tpl->tpl_vars['randomNumber']->value) {?>
            <span style="color: red; ">Your guess was: Too High</span>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['guess']->value) && $_smarty_tpl->tpl_vars['guess']->value < $_smarty_tpl->tpl_vars['randomNumber']->value) {?>
            <span style="color: blue; ">Your guess was: Too Low</span>
<!--            addi siia et kui on tühi siis näita et on tühi tekstiga-->
            <?php }?>
        </div>
        <input type="hidden" name="numberOfGuesses" value=<?php echo $_smarty_tpl->tpl_vars['numberOfGuesses']->value;?>
>
        <input type="hidden" name="randomNumber" value=<?php echo $_smarty_tpl->tpl_vars['randomNumber']->value;?>
>
        <input type="hidden" name="firstName" value=<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
>
        <br> <br><input type="submit" name="submit" class="submitButton"> </div>


<!--    flowcontrol vaja addida ???-->
<?php }
}
