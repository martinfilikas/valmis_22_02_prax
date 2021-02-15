<?php session_start() ?>

<?php echo "<link rel='stylesheet' type='text/css' href='../frontEnd/css/Pages.css'>" ?>

<?php
include '../frontEnd/templates/UserInformation.html'
?>

		<?php
			$_SESSION["randomNumber"] = rand(1, 100);
			$_SESSION["numberOfGuesses"] = 0;

include '../../nrgame/frontEnd/templates/GameDown.html';

