<?php
	if (isset($_POST["icc-btn-pseudo"])) {
		$e_pseudo = htmlspecialchars($_POST["icc-text-pseudo"]);
		if ($e_pseudo != null) {
			$bdd->exec("UPDATE `users` SET `Pseudo`='".$e_pseudo."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le pseudo à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-mail"])) {
		$e_mail = htmlspecialchars($_POST["icc-text-mail"]);
		if ($e_mail != null) {
			$bdd->exec("UPDATE `users` SET `Email`='".$e_mail."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("L\'adresse mail à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-grade"])) {
		$e_grade = htmlspecialchars($_POST["icc-text-grade"]);
		if ($e_grade != null) {
			$bdd->exec("UPDATE `users` SET `Grade`='".$e_grade."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le grade à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-adminGrade"])) {
		$e_adminGrade = htmlspecialchars($_POST["icc-text-adminGrade"]);
		if ($e_adminGrade != null) {
			$bdd->exec("UPDATE `users` SET `AdminGrade`='".$e_adminGrade."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le niveau d\'administration à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-side"])) {
		$e_side = htmlspecialchars($_POST["icc-text-side"]);
		if ($e_side != null) {
			$bdd->exec("UPDATE `users` SET `Side`='".$e_side."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le side à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-sexe"])) {
		$e_sexe = htmlspecialchars($_POST["icc-text-sexe"]);
		if ($e_sexe != null) {
			$bdd->exec("UPDATE `users` SET `Sexe`='".$e_sexe."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le sexe à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-bannir"])) {
		$e_bannir = htmlspecialchars($_POST["icc-text-bannir"]);
		$bdd->exec('UPDATE `users` SET `Ban`="1",`BanAdmin`="'.$_SESSION["Pseudo"].'",`Ban_Why`="'.$e_bannir.'" WHERE ID='.$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
		echo '<script>alert("'.$_SESSION["TIRNA_ADMIN_EDIT_1_Pseudo"].' à bien était bannis, pour la raison suivante : '.$e_bannir.'");</script>';
	} elseif (isset($_POST["icc-btn-rebannir"])) {
		$e_rebannir = htmlspecialchars($_POST["icc-text-bannir"]);
		if ($e_rebannir != null) {
			$bdd->exec('UPDATE `users` SET `Ban`="1",`BanAdmin`="'.$_SESSION["Pseudo"].'",`Ban_Why`="'.$e_rebannir.'" WHERE ID='.$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le motif du bannissement de '.$_SESSION["TIRNA_ADMIN_EDIT_1_Pseudo"].' à bien était changer, pour la nouvelle raison suivante : '.$e_rebannir.'");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-debannir"])) {
		$bdd->exec("UPDATE `users` SET `Ban`='0',`BanAdmin`= NULL,`Ban_Why`= NULL WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
		echo '<script>alert("'.$_SESSION["TIRNA_ADMIN_EDIT_1_Pseudo"].' à était réintégrer !");</script>';
	} elseif (isset($_POST["icc-btn-mailShow"])) {
		$e_mailShow = htmlspecialchars($_POST["icc-text-mailShow"]);
		if ($e_mailShow != null) {
			$bdd->exec("UPDATE `users` SET `MailShow`='".$e_mailShow."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("L\'affichage de l\'adresse mail à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-status"])) {
		$e_status = htmlspecialchars($_POST["icc-text-status"]);
		if ($e_status != null) {
			$bdd->exec("UPDATE `users` SET `Status`='".$e_status."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("L\'affichage du status à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	} elseif (isset($_POST["icc-btn-safe"])) {
		$e_safe = htmlspecialchars($_POST["icc-text-safe"]);
		if ($e_safe != null) {
			$bdd->exec("UPDATE `users` SET `Safe`='".$e_safe."' WHERE ID=".$_SESSION["TIRNA_ADMIN_EDIT_1_ID"]);
			echo '<script>alert("Le niveau de protection à bien était changer !");</script>';
		} else {
			echo '<script>alert("Merci de remplir tous les champs de texte");</script>';
		}
	}

?>