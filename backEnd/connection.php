<?php

include '../../nrgame/backEnd/config.php';

$conn = new mysqli('localhost', $user, $pass, $db);  // PANE teise faili sisse, see läheb eraldi

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}