<form action="HighScores.php" method="POST">
    Congratulations <?php echo $_SESSION["firstName"] ?>!<br>
    You won!<br>
    <?php include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ?>
    <?php
    include '../../nrgame/backEnd/connection.php';
    $sql = "INSERT INTO highscorestable (First, Score) VALUES ('{$_SESSION["firstName"]}', 51 - {$_SESSION["numberOfGuesses"] })";
    $result = $conn->query($sql);
    $conn->close();
    ?>
</form
