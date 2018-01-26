

<?php
	if (isset($args[1])) {
		if ($args[1] == "?" || $args[1] == "--help") {
			$TCT_Exemple = " settings reset<br> settings get -all<br> settings get -Pseudo<br> settings get -Email<br> settings get -Grade<br> settings get -Side<br> settings get -Sexe<br> settings get -MailShow<br> settings get -Status<br> settings get -Safe<br> settings set -MailShow=|true/false|<br> settings set -Status=|true/false|<br> settings set -Safe=|true/false|<br>";
			$TC_text = '<br>Cette commande vous permez de soit changer vos parametre utilisateur, soit en voir le contenu<br> exemple :<br>'.$TCT_Exemple.'<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}  elseif(count($args) >= 4) {
			$TCT_Exemple = " settings reset<br> settings get -all<br> settings get -Pseudo<br> settings get -Email<br> settings get -Grade<br> settings get -Side<br> settings get -Sexe<br> settings get -MailShow<br> settings get -Status<br> settings get -Safe<br> settings set -MailShow=|true/false|<br> settings set -Status=|true/false|<br> settings set -Safe=|true/false|<br>";
			$TC_text = '<br>Cette commande vous permez de soit changer vos parametre utilisateur, soit en voir le contenu<br> exemple :<br>'.$TCT_Exemple.'<br>';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		} elseif (count($args) == 3) {
			$argsExplode1 = explode("=", $args[2]);
			
			if($args[1] == "get") {
				if ($argsExplode1[0] == "-all") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br><br>Vos information personnel : <br>Votre prénom et votre nom : '.$_SESSION["Pseudo"].'<br>'.'Votre adresse e-mail : '.$_SESSION["Email"].'<br>'.'Votre grade : '.$_SESSION["Grade"].'<br>'.'Votre side : '.$_SESSION["Side"].'<br>'.'Votre sexe : '.$_SESSION["Sexe"].'<br>'.'Votre paramètre d\'affichage de votre adresse e-mail : '.$_SESSION["MailShow"].'<br>'.'Votre paramètre d\'affichage de votre status de connexion : '.$_SESSION["Status"].'<br>'.'Votre paramètre de votre niveau de sécuriter : '.$_SESSION["Safe"].'<br><br>';
				} elseif ($argsExplode1[0] == "-Pseudo") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre prénom et votre nom : '.$_SESSION["Pseudo"].'<br>';
				} elseif ($argsExplode1[0] == "-Email") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre adresse e-mail : '.$_SESSION["Email"].'<br>';
				} elseif ($argsExplode1[0] == "-Grade") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre grade : '.$_SESSION["Grade"].'<br>';
				} elseif ($argsExplode1[0] == "-Side") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre side : '.$_SESSION["Side"].'<br>';
				} elseif ($argsExplode1[0] == "-Sexe") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre sexe : '.$_SESSION["Sexe"].'<br>';
				} elseif ($argsExplode1[0] == "-MailShow") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de votre adresse e-mail : '.$_SESSION["MailShow"].'<br>';
				} elseif ($argsExplode1[0] == "-Status") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de votre status de connexion : '.$_SESSION["Status"].'<br>';
				} elseif ($argsExplode1[0] == "-Safe") {
					$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre de votre niveau de sécuriter : '.$_SESSION["Safe"].'<br>';
				}
			} elseif ($args[1] == "set") {
				if ($argsExplode1[0] == "-MailShow") {
					if ($argsExplode1[1] == "true") {
						$bdd->exec("UPDATE `users` SET `MailShow`='1' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de votre adresse e-mail vien de passer à 1<br>';
					} elseif ($argsExplode1[1] == "false") {
						$bdd->exec("UPDATE `users` SET `MailShow`='0' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de votre adresse e-mail vien de passer à 0<br>';
					}
				} elseif ($argsExplode1[0] == "-Status") {
					if ($argsExplode1[1] == "true") {
						$bdd->exec("UPDATE `users` SET `Status`='1' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de status de connexion vien de passer à 1<br>';
					} elseif ($argsExplode1[1] == "false") {
						$bdd->exec("UPDATE `users` SET `Status`='0' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre d\'affichage de status de connexion vien de passer à 0<br>';
					}
				} elseif ($argsExplode1[0] == "-Safe") {
					if ($argsExplode1[1] == "true") {
						$bdd->exec("UPDATE `users` SET `Safe`='1' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre de votre niveau de sécuriter de connexion vien de passer à 1<br>';
					} elseif ($argsExplode1[1] == "false") {
						$bdd->exec("UPDATE `users` SET `Safe`='0' WHERE id='".$_SESSION["ID"]."'");
						$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Votre paramètre de votre niveau de sécuriter de connexion vien de passer à 0<br>';
					}
				}
			}
		} elseif ($args[1] == "reset") {
			$bdd->exec("UPDATE `users` SET `Theme`='Default',`HomeType`='Home',`MailShow`='1',`Status`='0',`Safe`='0',`Langue`='fr-fr' WHERE id='".$_SESSION["ID"]."'");
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>Vos paramettre on bien été réinitialiser<br>';
		} else {
			$TC_text = 'Tapez : settings --help';
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
		}
	} else {
		$TC_text = 'Tapez : settings --help';
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' '.$command.'<br>'.$TC_text.'<br>';
	}
?>