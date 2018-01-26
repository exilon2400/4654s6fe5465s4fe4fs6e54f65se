<?php
	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = 'Cette commande vous deconnecte de la console TIRNA';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} else {
			$TC_text = 'Tapez : exit --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		header("Location: ".$_SESSION["TIRNA_LAST_SITE"]);
	}
?>