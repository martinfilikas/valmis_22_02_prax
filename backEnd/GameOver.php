<?php
include 'smartyGameOver.php';
if($_SESSION["gameOver"]) : ?>
    <form action="HighScores.php" method="POST">
        Congratulations {$firstLast} !<br>
        You won!<br>
        <?php
        include '../../nrgame/backEnd/connection.php';
        $sql = "INSERT INTO highscorestable (First, Score) VALUES ('{$_SESSION["firstName"]}', {$_SESSION["numberOfGuesses"]})";
        $result = $conn->query($sql);
        $conn->close();
        ?>
        <?php include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ?>
    </form>
<?php endif;?>