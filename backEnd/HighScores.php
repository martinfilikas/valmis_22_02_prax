<?php
echo "<link rel='stylesheet' type='text/css' href='../../nrgame/frontEnd/css/Pages.css'>";
?>

<h1 style="text-align:center;padding-top: 15%;">TOP 10 PLAYERS</h1>
<?php


echo "<table  class='table' style='margin-left: auto;
    margin-right: auto;  width: 800px;
  text-align: center;border-collapse: collapse; border: solid thin; outline: thin solid; 
'>
    <tr style='outline: thin solid;'>
    <th style='outline: thin solid;'>Place</th>
        <th style='outline: thin solid;'>Name</th>
        <th style='outline: thin solid;'>Score</th>
    </tr>" ;



include '../backEnd/connection.php';

$sql = "SELECT * FROM nrgame.highscorestable ORDER BY Score LIMIT 10";
$result = $conn->query($sql);
$place = 1;  // 0 place ei saa olla
while ($row = $result->fetch_assoc()) {
    echo "<tr style='outline: thin solid;'>";
    echo "<td style='outline: thin solid;'>" . $place . "</td>";
    echo "<td style='outline: thin solid;'>" . $row["First"] . "</td>";
    echo "<td style='outline: thin solid;'>" . $row["Score"] . "</td>";
    echo "</tr>";
    $place = $place + 1;
}
echo "</table >";

$conn->close();

include '../frontEnd/templates/HighScores.html' ;
?>



