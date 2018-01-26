<?php 
	if(isset($_SESSION["Pseudo"])) {
		$reponse = $bdd->query("SELECT * FROM users");
		while ($donnees = $reponse->fetch()) {
			if($donnees["ID"] == $_SESSION["ID"]) {
				$_SESSION["Pseudo"] = $donnees["Pseudo"];
				$_SESSION["ID"] = $donnees["ID"];
				$_SESSION["Email"] = $donnees["Email"];
				$_SESSION["Grade"] = $donnees["Grade"];
	            $_SESSION['AdminGrade'] = $donnees['AdminGrade'];
				$_SESSION["Side"] = $donnees["Side"];
				$_SESSION["Sexe"] = $donnees["Sexe"];
				$_SESSION["Ban"] = $donnees["Ban"];
				$_SESSION["Ban_Why"] = $donnees["Ban_Why"];
				$_SESSION["Theme"] = $donnees["Theme"];
				$_SESSION["HomeType"] = $donnees["HomeType"];
				$_SESSION["MailShow"] = $donnees["MailShow"];
				$_SESSION["Status"] = $donnees["Status"];
				$_SESSION["Safe"] = $donnees["Safe"];
				$_SESSION["Langue"] = $donnees["Langue"];
			}
		}
	}
?>