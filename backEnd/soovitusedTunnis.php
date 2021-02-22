<?php
function gameTurn($numberOfGuesses, $guess, $randomNumber){
    $result = false;
    if ($guess == $randomNumber && $numberOfGuesses <= 50){
        $result = true;
    }

    $numberOfGuesses++;
    return array("numberOfGuesses" => $numberOfGuesses,
        "guess" => $guess,
        "randomNumber" => $randomNumber,
        "result" => $result
    );
}
?>