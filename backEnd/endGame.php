<?php
include '../../nrgame/backEnd/connection.php';
require 'Game.php';

$firstName = $_SESSION["firstName"] = $_POST['firstName'];
$sql = "INSERT INTO highscorestable (First, Score) VALUES ('{$_SESSION["firstName"]}', {$_SESSION["numberOfGuesses"]})";
$result = $conn->query($sql);

$sql =
    "SELECT * FROM (
						SELECT *, (@rownum := @rownum + 1) AS position
						FROM highscorestable hst
						JOIN (SELECT @rownum := 0) r
						ORDER BY hst.First, hst.Last
					)x	
					WHERE x.First = '{$firstName}' 
					LIMIT 1";


$result = $conn->query($sql);
$result = $result->fetch_assoc();

$sql = "SELECT COUNT(*) AS num FROM highscorestable";
$totalPlayers = $conn->query($sql);
$totalPlayers = $totalPlayers->fetch_assoc();


echo "You are rank: {$result["position"]} out of {$totalPlayers["num"]}";

$conn->close();


