<?php
	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = 'Cette commande vous permez de gérer votre niveau de perm. sur le site au-quel vous êtes connectez en temps que superutilisateur.';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif(isset($_SESSION["TIRNA_MASTER_USRNAME"])) {
			if ($_SESSION["TIRNA_MASTER_USRNAME"] != "disconnect") {
				if ($args[1] == "perm") {
					if ($args[2] == "-master") {
						$reponse = $bdd->query('SELECT * FROM site');
						$trigger_root = false;
						for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
							$donnees = $reponse->fetch();
							if ($_SESSION["TIRNA_MASTER_SITE"] == $donnees["ID"]) {
								$_SESSION["TIRNA_MASTER_SITE_PERM"] = $donnees["Master_Perm"];
								$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vous venez de vous passez superadministrateur<br>';
								$trigger_root = true;
							}
							
							if ($i == $reponse->rowCount() && $trigger_root == false) {
								$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Impossible de trouver le site demander<br>';
							}
						}
					} elseif ($args[2] == "-client") {
						$_SESSION["TIRNA_MASTER_SITE_PERM"] = 0;
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vous venez de vous passez client<br>';
					} else {
						$TC_text = 'Tapez : use --help';
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
					}
				} elseif($args[1] == "sw") {
					if ($args[2] == "-public") {
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vous venez de faire passer le site en mode public<br>';
						$bdd->exec("UPDATE `site` SET `DarkSide`='0' WHERE id='".$_SESSION["TIRNA_MASTER_SITE"]."'");
					} elseif ($args[2] == "-private") {
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vous venez de faire passer le site en mode priver<br>';
						$bdd->exec("UPDATE `site` SET `DarkSide`='1' WHERE id='".$_SESSION["TIRNA_MASTER_SITE"]."'");
					} else {
						$TC_text = 'Tapez : use --help';
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
					}
				} else {
					$TC_text = 'Tapez : use --help';
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
				}
			} else {
				$TC_text = 'Merci de vous connectez à un site en temps que superutilisateur pour pouvoir utiliser cette commande !';
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
			}
		} elseif (!isset($_SESSION["TIRNA_MASTER_USRNAME"])) {
			$TC_text = 'Merci de vous connectez à un site en temps que superutilisateur pour pouvoir utiliser cette commande !';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} else {
			$TC_text = 'Tapez : use --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$TC_text = 'Tapez : use --help';
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
	}
?>