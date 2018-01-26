<?php
	if (isset($args[1])) {
		$argsExplode1 = explode("=", $args[1]);
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = '<br>Cette commande vous permez de crypter une chaine de caractère<br><color style="color: red;">ATTENTION : LES ESPACE " " NE FONCTIONNE PAS, UTILISER L\'UNDERSCORE "_" IL SERONT TRANSFORMET EN ESPACE " "</color><br> exemple :<br> crypt -md5=Helllo_World_!<br> crypt -sha1=Bonjour_tous_le_monde_!<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}  elseif(count($args) >= 3) {
			$TC_text = '<br><color style="color: red;">ATTENTION : LES ESPACE " " NE FONCTIONNE PAS, UTILISER L\'UNDERSCORE "_" IL SERONT TRANSFORMET EN ESPACE " "</color><br> exemple :<br> crypt -md5=Helllo_World_!<br> crypt -sha1=Bonjour_tous_le_monde_!<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif (count($args) == 2) {
			if ($argsExplode1[0] == "-sha1") {
				$replaced = str_replace("_", " ", $argsExplode1[1]);
				$final = sha1($replaced);
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>La chaine "'.$replaced.'" vien d\'être crypter en sha1 : '.$final.'<br>';
			} elseif ($argsExplode1[0] == "-md5") {
				$replaced = str_replace("_", " ", $argsExplode1[1]);
				$final = md5($replaced);
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>La chaine "'.$replaced.'" vien d\'être crypter en md5 : '.$final.'<br>';
			}
		} else {
			$TC_text = 'Tapez : crypt --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$TC_text = 'Tapez : crypt --help';
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
	}
?>