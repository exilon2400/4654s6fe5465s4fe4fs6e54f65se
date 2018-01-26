<?php
	if(isset($_POST["inscription_i"])) {
		$pseudo_i = htmlspecialchars($_POST["pseudo_i"]);
		$password1_i = htmlspecialchars($_POST["password1_i"]);
		$password2_i = htmlspecialchars($_POST["password2_i"]);
		$email_i = htmlspecialchars($_POST["email_i"]);
		$sexe_i = htmlspecialchars($_POST["sexe_i"]);
		$side_i = htmlspecialchars($_POST["side_i"]);
		if($pseudo_i != null AND $password1_i != null AND $password2_i != null AND $email_i != null AND $sexe_i != null AND $side_i != null) {
			if($pseudo_i != null OR $password1_i != null OR $password2_i != null OR $email_i != null OR $sexe_i != null OR $side_i != null) {
				if($password1_i == $password2_i) {
					$Password_Crypt = sha1($password1_i);
	                $bdd->exec("INSERT INTO `users`(`Pseudo`, `Password`, `Email`, `Side`, `Sexe`) VALUES ('".$pseudo_i."','".$Password_Crypt."','".$email_i."','".$side_i."','".$sexe_i."')");
	                $_SESSION['Pseudo'] = $pseudo_i;
	                $_SESSION['Email'] = $email_i;
	                $_SESSION['Sexe'] = $sexe_i;
	                $_SESSION['Side'] = $side_i;
	                $reponse = $bdd->query('SELECT * FROM users');
					while ($donnees = $reponse->fetch()) {
	                	if($donnees["Pseudo"] == $_SESSION["Pseudo"]) {
	            			$_SESSION['ID'] = $donnees['ID'];
	                    	$_SESSION['Grade'] = $donnees['Grade'];
	                    	$_SESSION['AdminGrade'] = $donnees['AdminGrade'];
	                    	$_SESSION['Ban'] = $donnees['Ban'];
	                    	$_SESSION['Ban_Why'] = $donnees['Ban_Why'];
	                	}	
					}
	                header('Location: home.php?m=1');
				} else {
					echo "<script>alert('Merci de mettre les mots de passe !');</script>";
				}
			} else {
				echo "<script>alert('Merci remplir tous les champs de texte !')</script>";
			}
		} else {
			echo "<script>alert('Merci remplir tous les champs de texte !')</script>";
		}
	}
	if(isset($_POST["connexion_c"])) {
		$Pseudo = $_POST['pseudo_c'];
        $Password = $_POST['password1_c'];
        if($Pseudo != null AND $Password != null) {
            if($Pseudo != null OR $Password != null) {
                $reponse = $bdd->query('SELECT * FROM users');
				$trigger_index = false;
				for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
					$donnees = $reponse->fetch();
					if($Pseudo == $donnees['Pseudo'] AND sha1($Password) == $donnees['Password']) {
                        if ($donnees["Ban"] != "1") {
							$_SESSION["Pseudo"] = $donnees["Pseudo"];
							$_SESSION["ID"] = $donnees["ID"];
							$_SESSION["Email"] = $donnees["Email"];
							$_SESSION["Grade"] = $donnees["Grade"];
	                    	$_SESSION['AdminGrade'] = $donnees['AdminGrade'];
							$_SESSION["Side"] = $donnees["Side"];
							$_SESSION["Sexe"] = $donnees["Sexe"];
							header("Location: home.php");
                        } else {
							echo "<script>alert('Vous avez été banni : ".$donnees["Ban_Why"]."')</script>";
                        }
						$trigger_index = true;
					}
					if ($i == $reponse->rowCount() && $trigger_index == false) {
						echo "<script>alert(\"Erreur: Le nom d'utilisateur ou le mot de passe est incorrect\")</script>";
					}
				}
            } else {
				echo "<script>alert('Merci remplir tous les champs de texte !')</script>";
            }
        } else {
			echo "<script>alert('Merci remplir tous les champs de texte !')</script>";
        }
	}
?>