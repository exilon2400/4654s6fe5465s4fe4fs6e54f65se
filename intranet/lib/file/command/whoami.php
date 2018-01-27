<?php
	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = 'Cette commande vous retourne votre niveau d\'utilisateur';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} else {
			$TC_text = 'Tapez : whoami --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		if (isset($_SESSION["TIRNA_MASTER_USRNAME"])) {
			if ($_SESSION["TIRNA_MASTER_USRNAME"] != "disconnect") {
				$reponse = $bdd->query('SELECT * FROM site');
				$trigger_root = false;
				for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
					$donnees = $reponse->fetch();
					if ($_SESSION["TIRNA_MASTER_SITE"] == $donnees["ID"]) {
						if ($_SESSION["TIRNA_MASTER_SITE_PERM"] == $donnees["Master_Perm"]) {
							$grade_id_2506 = "superadministrateur";
						} else {
							$grade_id_2506 = "utilisateur";
						}
						$site_id_29304 = $donnees["Name"];
						$trigger_root = true;
					}
					if ($i == $reponse->rowCount() && $trigger_root == false) {
						$grade_id_2506 = "Erreur - 22543";
					}
				}
				$TC_text = 'Vous êtes connecter sur '.$site_id_29304.', en tant que '.$grade_id_2506;
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
			} else {
				$TC_text = 'Merci de vous connecter avec la commande "root"';
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
			}
		} else {
			$TC_text = 'Merci de vous connecter avec la commande "root"';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	}
?>