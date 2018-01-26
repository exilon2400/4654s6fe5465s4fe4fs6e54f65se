<?php
	if(isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br><br>exemple : <color style="color:#D35400">color #D35400</color><br>exemple : <color style="color:#090">color reload</color><br><br>';
		} elseif($args[1] == "reload") {
			$_SESSION["TIRNA_COMMAND_COLOR"] = "#090";
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>';
			header("Location: console.php");
		} else {
			$_SESSION["TIRNA_COMMAND_COLOR"] = htmlspecialchars($args[1]);
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>';
			header("Location: console.php");
		}
	} else {
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br><br>Merci de bien entrez votre couleur - exemple : <color style="color:#D35400">color #D35400</color><br><br>';
	}
?>