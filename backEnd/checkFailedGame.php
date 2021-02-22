<?php if(isset($_SESSION["numberOfGuesses"]) &&  $_SESSION["numberOfGuesses"] > 50) : ?>
    <?php header("Location: backEnd/failedGame.php");
    include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ;
    exit(); ?>
<?php endif;?>