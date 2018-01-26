<?php
		/*
			'ip-'
			'usrname-'
			'pass-'
			'key-'
		*/

	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TC_text = 'La commande root vous permez de vous connectez en administrateur sur le site courant <br><color style="color: red;">ATTENTION : LES ESPACE " " NE FONCTIONNE PAS, UTILISER L\'UNDERSCORE "_" IL SERONT TRANSFORMET EN ESPACE " "</color><br><br>Exemple type (Site courant : tirna://test.test) :<br>L\'adresse ip du site est : 127.0.0.1<br>La nom du superutilisateur est : root test<br>Le mot de passe du superutilisateur est : tirna_pwd<br>La clé maître du site est : 098f6bcd4621d373cade4e832627b4f6<br><br>La commande à tapez pour se connecter en temps que superutilisateur<br>sur le site tirna://test.test sera :<br>root -ip=127.0.0.1 -usrname=root_test -pass=tirna_pwd -key=098f6bcd4621d373cade4e832627b4f6<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif($args[1] == "-disconnect" || $args[1] =="-q") {
			$_SESSION["TIRNA_MASTER_USRNAME"] = "disconnect";
			$_SESSION["TIRNA_MASTER_SITE"] = "disconnect_SITE";
			$_SESSION["TIRNA_MASTER_SITE_PERM"] = "disconnect_PERM";
			$TC_text = 'Vous avez bien étais déconnecter !<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif(count($args) == 5) {
			$argsExplode1 = explode("=", $args[1]);
			$argsExplode2 = explode("=", $args[2]);
			$argsExplode3 = explode("=", $args[3]);
			$argsExplode4 = explode("=", $args[4]);
			if (count($argsExplode1) == 2 || count($argsExplode2) == 2 || count($argsExplode3) == 2 || count($argsExplode4) == 2) {
				if($argsExplode1[0] == "-ip" && $argsExplode2[0] == "-usrname" && $argsExplode3[0] == "-pass" && $argsExplode4[0] == "-key") {
					if($argsExplode1[1] != null && $argsExplode2[1] != null && $argsExplode3[1] != null && $argsExplode4[1] != null) {
						if ($_SESSION["TIRNA_LAST_SITE"] == "home.php" || $_SESSION["TIRNA_LAST_SITE"] == "search.php") {
							
							if($_SESSION["TIRNA_LAST_SITE"] == "home.php") {
								$TC_text = 'Vous ne pouvez pas vous connectez à la page d\'accueil !';
								$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
							} else {
								$TC_text = 'Vous ne pouvez pas vous connectez au moteur de recherche !';
								$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
							}
						} else {
							$replaced_usr = str_replace("_", " ", $argsExplode2[1]);
							$replaced_pass = str_replace("_", " ", $argsExplode3[1]);
							$replaced_key = str_replace("_", " ", $argsExplode4[1]);
							

				            $reponse = $bdd->query('SELECT * FROM site');
							$trigger_root = false;
							for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
								$donnees = $reponse->fetch();
								if ($argsExplode1[1] == $donnees["IP_Site"]) {
									if ($argsExplode2[1] == $donnees["Admin"]) {
										if ($argsExplode3[1] == $donnees["PassAdmin"]) {
											if ($argsExplode4[1] == $donnees["KeyAdmin"]) {
												$_SESSION["TIRNA_MASTER_USRNAME"] = $_SESSION["Pseudo"];
												$_SESSION["TIRNA_MASTER_SITE"] = $donnees["ID"];
												$_SESSION["TIRNA_MASTER_SITE_PERM"] = $donnees["Master_Perm"];
												$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vous êtes connectez en temps que superutilisateur au site : '.$donnees["Name"].'<br>';
											} else {
												$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>La clé maître du site est incorrect<br>';
											}
										} else {
											$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Le mot de passe du superutilisateur est incorrect<br>';
										}
									} else {
										$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Le nom du superutilisateur est incorrect<br>';
									}
									$trigger_root = true;
								}
								
								if ($i == $reponse->rowCount() && $trigger_root == false) {
									$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Impossible de trouver le site demander<br>';
								}
							}
						}
					} else {
						$TC_text = 'Tapez : root --help';
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
					}
				} else {
					$TC_text = 'Tapez : root --help';
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
				}
			} else {
				$TC_text = 'Tapez : root --help';
				$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
			}
		} else {
			$TC_text = 'Tapez : root --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$TC_text = 'Tapez : root --help';
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
	}
?>