
<?php include '../backEnd/connection.php';

//include '../../nrgame/backEnd/Game.php';

echo 'Sorry, you have tried too many times. Better luck next time !';

require '../../nrgame/frontEnd/templates/goToScoreBoardInput.html';  // todo ei tööta

//include '../../nrgame/frontEnd/templates/goToScoreBoardInput.html' ;
?>
<br/>



<?php
include '../../nrgame/frontEnd/templates/GameDown.html';

echo "<link rel='stylesheet' type='text/css' href='../frontEnd/css/Pages.css'>";

include '../../nrgame/frontEnd/templates/GameStyling.html';
