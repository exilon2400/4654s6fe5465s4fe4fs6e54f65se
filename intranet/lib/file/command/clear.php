<?php
	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = 'Cette commande vide la console';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} else {
			$TC_text = 'Tapez : clear --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$_SESSION["TIRNA_COMMAND"] = "";
	}
?>