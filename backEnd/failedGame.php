<?php include '../backEnd/connection.php';

//include '../../nrgame/backEnd/Game.php';

echo 'Sorry, you have tried too many times. Better luck next time !';

require '../../nrgame/frontEnd/templates/goToScoreBoardInput.html';  //

//include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ;
?>
<br/>
<?php
include '../../nrgame/frontEnd/templates/gameDown.html';

echo "<link rel='stylesheet' type='text/css' href='../frontEnd/css/pages.css'>";

include '../../nrgame/frontEnd/templates/gameStyling.html';
