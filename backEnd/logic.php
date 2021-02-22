<?php
require_once 'config.php';

function gameTurn($numberOfGuesses, $guess, $randomNumber, $flowControl)
{
    $result = false;
    if ($guess == $randomNumber && $numberOfGuesses <= 50) {
        $result = true;
        $conn = new mysqli('localhost', $user, $pass, $db);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO highscorestable (First, Score) VALUES ('{$_SESSION["firstName"]}', {$_SESSION["numberOfGuesses"]})";
        $result = $conn->query($sql);
        $conn->close();
        $flowControl = "gameWon";
    }
    elseif ($numberOfGuesses > 50){

    }

    $numberOfGuesses++;
    return array("numberOfGuesses" => $numberOfGuesses,
        "guess" => $guess,
        "randomNumber" => $randomNumber,
        "result" => $result,
        "flowControl" => $flowControl
    );
}


