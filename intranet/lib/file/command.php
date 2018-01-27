<?php
	/*
		v1.0

		- help (Pour voir toute les commande) *
		- disconnect (Pour se deconnecter de l'intranet) *
		- clear (Pour vider la console) *
		- color (Pour changer la couleur du text) *
		- exit (Pour quiter la console) *
		- ping (Pour obtenir l'ip) *
			'-name=' ^^
			'-link=' ^^
		- setting (Pour changer les paramettre) *
			- set (Pour definir un nouveau paramettre) *
			- get (Pour obtenir la valeur d'un paramettre) *
			- reset (Pour remettre les paramettre par defaut) *
				{
					Liste des parametres :
						- Pseudo (String) - get ^^
						- Email (String) - get ^^
						- Grade (Int) - get ^^
						- Side (Int) - get ^^
						- Sexe (Int) - get ^^
						- MailShow (Int -> Boolean) - set/get ^^
						- Status (Int -> Boolean) - set/get ^^
						- Safe (Int -> Boolean) - set/get ^^
				}
		- crypt (Pour crypter une chaine de caractere) *
			- sha1 ^^
			- md5 ^^

		- root (Pour se connecter en temps qu'admin) *
			'ip-' ^^
			'usrname-' ^^
			'pass-' ^^
			'key-' ^^
		- use (Pour l'augmentation des privilège)
			- perm (Pour changer son niveau de perm sur le site hacker)
				- up 'master'
				- down 'client'
			- sw (Pour changer le status du site hacker)
				- public
				- private
		- sniff (Pour regarde les infractions commise par un utilisateur sur le site hacker)
		
		v1.1
		
		- theme
			'-theme=' : le nom du thême, exemple '-theme=Default'

	*/


	if($command == "help" || $command == "?") {
		include 'lib/file/command/help.php';
	}

	elseif($args[0] == "disconnect" || $command == "disconnect") {
		include 'lib/file/command/disconnect.php';
	}

	elseif($args[0] == "clear" || $command == "clear"|| $command == "cls" || $args[0] == "cls") {
		include 'lib/file/command/clear.php';
	}

	elseif($args[0] == "color" || $command == "color") {
		include 'lib/file/command/color.php';
	}

	elseif($args[0] == "exit" || $command == "exit") {
		include 'lib/file/command/exit.php';
	}

	elseif($args[0] == "ping" || $command == "ping") {
		include 'lib/file/command/ping.php';
	}

	elseif($args[0] == "settings" || $command == "settings") {
		include 'lib/file/command/settings.php';
	}

	elseif($args[0] == "crypt" || $command == "crypt") {
		include 'lib/file/command/crypt.php';
	}

	elseif($args[0] == "root" || $command == "root") {
		include 'lib/file/command/root.php';
	}

	elseif($args[0] == "use" || $command == "use") {
		include 'lib/file/command/use.php';
	}

	elseif($args[0] == "whoami" || $command == "whoami") {
		include 'lib/file/command/whoami.php';
	}

	else {
		$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' La commande : '.$command.' n\'est pas reconnue<br>';
	}
?>