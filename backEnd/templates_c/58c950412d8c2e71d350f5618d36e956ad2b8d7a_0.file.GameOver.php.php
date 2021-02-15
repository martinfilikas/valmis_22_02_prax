<?php
/* Smarty version 3.1.38, created on 2021-02-01 13:28:21
  from 'E:\Xamp\htdocs\nrgame\backEnd\GameOver.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6017f3e5828bf6_89458585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c950412d8c2e71d350f5618d36e956ad2b8d7a' => 
    array (
      0 => 'E:\\Xamp\\htdocs\\nrgame\\backEnd\\GameOver.php',
      1 => 1612182499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017f3e5828bf6_89458585 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
include 'smartyGameOver.php';
if($_SESSION["gameOver"]) : <?php echo '?>';?>

    <form action="HighScores.php" method="POST">
        Congratulations <?php echo $_smarty_tpl->tpl_vars['firstLast']->value;?>
 !<br>
        You won!<br>
        <?php echo '<?php
        ';?>
include '../../nrgame/backEnd/connection.php';
        $sql = "INSERT INTO highscorestable (First, Score) VALUES ('<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["firstName"];?>
', <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["numberOfGuesses"];?>
)";
        $result = $conn->query($sql);
        $conn->close();
        <?php echo '?>';?>

        <?php echo '<?php ';?>
include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' <?php echo '?>';?>

    </form>
<?php echo '<?php ';?>
endif;<?php echo '?>';
}
}
