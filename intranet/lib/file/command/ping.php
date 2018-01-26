<?php
	if (isset($args[1])) {
		$argsExplode1 = explode("=", $args[1]);
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = '<br>Cette commande vous permez de obtenir l\'adresse ip d\'un server<br> exemple :<br> ping -name=Site_Officiel_de_l\'IDAP<br> ping -link=tirna://idap.org<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif ($argsExplode1[0] == "-name") {
			$replaced = str_replace("_", " ", $argsExplode1[1]);
            $reponse = $bdd->query('SELECT * FROM site');
			$trigger_CMD_name = false;
			for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
				$donnees = $reponse->fetch();

				if($donnees["Name"] == $replaced) {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Adresse ip de '.$replaced.' : '.$donnees["IP_Site"].'<br>';
					$trigger_CMD_name = true;
				}
				if ($i == $reponse->rowCount() && $trigger_CMD_name == false) {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Impossible de trouver le site demander<br>';
				}
			}
		} elseif ($argsExplode1[0] == "-link") {
            $reponse = $bdd->query('SELECT * FROM site');
			$trigger_CMD_link = false;
			for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
				$donnees = $reponse->fetch();

				if($donnees["LinkShow"] == $argsExplode1[1]) {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Adresse ip de '.$argsExplode1[1].' : '.$donnees["IP_Site"].'<br>';
					$trigger_CMD_link = true;
				}
				if ($i == $reponse->rowCount() && $trigger_CMD_link == false) {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Impossible de trouver le site demander<br>';
				}
			}
		} else {
			$TC_text = 'Tapez : ping --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$TC_text = 'Tapez : ping --help';
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
	}
?>