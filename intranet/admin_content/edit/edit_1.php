<?php
    $playerId = $_GET["playerId"];
    $reponse = $bdd->query('SELECT * FROM users');
    while ($donnees = $reponse->fetch()) {
		if ($donnees["ID"] == $playerId) {
				$_SESSION["TIRNA_ADMIN_EDIT_1_ID"] = $donnees["ID"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Pseudo"] = $donnees["Pseudo"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Email"] = $donnees["Email"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Grade"] = $donnees["Grade"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_AdminGrade"] = $donnees["AdminGrade"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Side"] = $donnees["Side"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Sexe"] = $donnees["Sexe"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Ban"] = $donnees["Ban"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Ban_Why"] = $donnees["Ban_Why"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_BanAdmin"] = $donnees["BanAdmin"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Theme"] = $donnees["Theme"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_HomeType"] = $donnees["HomeType"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_MailShow"] = $donnees["MailShow"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Status"] = $donnees["Status"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Safe"] = $donnees["Safe"];
				$_SESSION["TIRNA_ADMIN_EDIT_1_Langue"] = $donnees["Langue"];

				$_SESSION["TIRNA_ADMIN_EDIT_1_UserAdmin"] = $_SESSION["Pseudo"];
			?>
			<script src="js/animation/admin/change_btn.js"></script>
			<div class="information-content">
				<div class="information-content-info">
					<p class="title-information">Information</p>
					<div class="spacer-information"></div>
					<div class="information">
						<p class="info">ID : <?php echo $donnees["ID"]; ?></p>
						<p class="info">Pseudo : <?php echo $donnees["Pseudo"]; ?></p>
						<p class="info">Adresse Mail : <?php echo $donnees["Email"]; ?></p>
						<p class="info">Grade : <?php echo gradePrint($donnees["Grade"], $donnees["Side"], "fr-fr"); ?></p>
						<p class="info">Niveau d'administration : <?php echo adminGradePrint($donnees["AdminGrade"], "fr-fr"); ?></p>
						<p class="info">Side : <?php echo sidePrint($donnees["Side"], "fr-fr"); ?></p>
						<p class="info">Sexe : <?php echo sexePrint($donnees["Sexe"], "fr-fr"); ?></p>
						<p class="info">Niveau de bannissement : <?php if ($donnees["Ban"] == 0) {echo "Non bannis.";} else {echo '<color style="color:red;">Bannis</color>';} ?></p>
						<?php  if ($donnees["Ban"] == 1) { ?> <p class="info">Raison du bannissement : <?php if (!empty($donnees["Ban_Why"])) {echo $donnees["Ban_Why"];} else {echo $donnees["Pseudo"]." n'as pas était bannis.";} ?></p> <p class="info">Bannis par : <?php echo $donnees["BanAdmin"]; ?></p> <?php } ?>
						<p class="info">Thême : <?php echo $donnees["Theme"]; ?></p>
						<p class="info">Page d'accueil : <?php echo $donnees["HomeType"]; ?></p>
						<p class="info">Paramètre d'affichage de l'adresse mail : <?php if ($donnees["MailShow"] == 1) {echo $donnees["Pseudo"]." ne souhaite pas afficher son adresse mail en publique.";} else {echo $donnees["Pseudo"]." autorise l'affichage de son adresse mail.";} ?></p>
						<p class="info">Paramètre d'affichage du status de connexion : <?php if ($donnees["Status"] == 1) {echo $donnees["Pseudo"]." ne souhaite pas afficher son status.";} else {echo $donnees["Pseudo"]." autorise l'affichage de son status.";} ?></p>
						<p class="info">Paramètre de configuration de la protection : <?php if ($donnees["Safe"] == 1) {echo $donnees["Pseudo"]." ne souhaite pas être protégé par le TirnaSafeWeb.";} else {echo $donnees["Pseudo"]." est protégé par le TirnaSafeWeb.";} ?></p>
						<p class="info">Langue utiliser par l'utilisateur : <?php echo $donnees["Langue"]; ?></p>
					</div>
					<img src="img/arrow.png" class="ici-arrow">
				</div>
				<div class="information-content-change">
					<h1 class="icc-title">Changer les paramètres de l'utilisateur</h1>
					<div class="icc-btn-content">
						<center>
							<p class="icc-btn" id="icc-btn-Pseudo">Pseudo</p>
							<p class="icc-btn" id="icc-btn-Mail">Adresse Mail</p>
							<p class="icc-btn" id="icc-btn-Grade">Grade</p>
							<p class="icc-btn" id="icc-btn-AdminGrade">Niveau d'administration</p>
							<p class="icc-btn" id="icc-btn-Side">Side</p>
							<p class="icc-btn" id="icc-btn-Sexe">Sexe</p>
							<p class="icc-btn" id="icc-btn-Theme">Thême</p>
							<p class="icc-btn" id="icc-btn-HomeType">Page d'accueil</p>
							<p class="icc-btn" id="icc-btn-MailShow">Affichage de l'adresse mail</p>
							<p class="icc-btn" id="icc-btn-Status">Status de connexion</p>
							<p class="icc-btn" id="icc-btn-Safe">Protection par TirnaSafeWeb</p>
							<p class="icc-btn" id="icc-btn-Langue">Langue</p>
							<p class="icc-btn icc-important" id="icc-btn-Bannir">Bannir</p>
						</center>
					</div>
					<div class="icc-alterate-content">
						<div class="alt" id="alt-Pseudo" style="display: block">
							<p class="alt-title">Changer de pseudo</p>
							<form method="post">
								<input type="text" name="icc-text-pseudo" placeholder="<?php echo $donnees["Pseudo"]; ?>" value="<?php echo $donnees["Pseudo"]; ?>">
								<input type="submit" name="icc-btn-pseudo" value="Change le pseudo">
							</form>
						</div>


						<div class="alt" id="alt-Mail">
							<p class="alt-title">Changer l'adresse mail</p>
							<form method="post">
								<input type="text" name="icc-text-mail" placeholder="<?php echo $donnees["Email"]; ?>" value="<?php echo $donnees["Email"]; ?>">
								<input type="submit" name="icc-btn-mail" value="Change l'adresse mail">
							</form>
						</div>


						<div class="alt" id="alt-Grade">
							<p class="alt-title">Changer le grade</p>
							<p class="alt-subtitle">Un tableau des grades sera bientôt dispobible.</p>
							<form method="post">
								<input type="number" name="icc-text-grade" placeholder="<?php echo $donnees["Grade"]; ?>" value="<?php echo $donnees["Grade"]; ?>">
								<input type="submit" name="icc-btn-grade" value="Change le grade">
							</form>
						</div>


						<div class="alt" id="alt-AdminGrade">
							<p class="alt-title">Changer le niveau d'administration.</p>
							<form method="post">
								<select name="icc-text-adminGrade">
									<option value="0" <?php if ($donnees["AdminGrade"] == 0) {echo "selected";} ?>>Membre</option>
									<option value="1" <?php if ($donnees["AdminGrade"] == 1) {echo "selected";} ?>>Staff</option>
									<option value="2" <?php if ($donnees["AdminGrade"] == 2) {echo "selected";} ?>>Ingénieur Technique</option>
									<option value="3" <?php if ($donnees["AdminGrade"] == 3) {echo "selected";} ?>>Support Technique</option>
									<option value="4" <?php if ($donnees["AdminGrade"] == 4) {echo "selected";} ?>>Directeur Artistique</option>
									<option value="5" <?php if ($donnees["AdminGrade"] == 5) {echo "selected";} ?>>Modérateur</option>
									<option value="6" <?php if ($donnees["AdminGrade"] == 6) {echo "selected";} ?>>Administrateur</option>
									<option value="7" <?php if ($donnees["AdminGrade"] == 7) {echo "selected";} ?>>Référent R.P</option>
									<option value="8" <?php if ($donnees["AdminGrade"] == 8) {echo "selected";} ?>>Chef Mappeur</option>
									<option value="9" <?php if ($donnees["AdminGrade"] == 9) {echo "selected";} ?>>Chef Développeur</option>
									<option value="10" <?php if ($donnees["AdminGrade"] == 10) {echo "selected";} ?>>D.R.H</option>
									<option value="11" <?php if ($donnees["AdminGrade"] == 11) {echo "selected";} ?>>Technicien Intranet</option>
									<option value="12" <?php if ($donnees["AdminGrade"] == 12) {echo "selected";} ?>>Technicien Intranet / Modérateur</option>
								</select>
								<input type="submit" name="icc-btn-adminGrade" value="Change le niveau d'administration">
							</form>
						</div>


						<div class="alt" id="alt-Side">
							<p class="alt-title">Changer le side</p>
							<form method="post">
								<select name="icc-text-side">
									<option value="0" <?php if ($donnees["Side"] == 0) {echo "selected";} ?>>O.T.A.N.</option>
									<option value="1" <?php if ($donnees["Side"] == 1) {echo "selected";} ?>>U.R.S.S.</option>
									<option value="2" <?php if ($donnees["Side"] == 2) {echo "selected";} ?>>I.D.A.P.</option>
								</select>
								<input type="submit" name="icc-btn-side" value="Change le side">
							</form>
						</div>


						<div class="alt" id="alt-Sexe">
							<p class="alt-title">Changer le sexe</p>
							<form method="post">
								<select name="icc-text-sexe">
									<option value="0" <?php if ($donnees["Side"] == 0) {echo "selected";} ?>>Homme</option>
									<option value="1" <?php if ($donnees["Side"] == 1) {echo "selected";} ?>>Femme</option>
								</select>
								<input type="submit" name="icc-btn-sexe" value="Change le sexe">
							</form>
						</div>


						<div class="alt" id="alt-Bannir">
							<form method="post">
							<?php
								if ($donnees["Ban"] == 0) {?>
									<p class="alt-title">Bannir <?php echo $donnees["Pseudo"]; ?></p>
									<textarea name="icc-text-bannir" placeholder="Motif du bannissement : Prenez en compte que <?php echo $donnees["Pseudo"]; ?> vera cette raison lors de sa connexion."></textarea><br>
									<input type="submit" name="icc-btn-bannir" value="BANNIR <?php echo $donnees["Pseudo"]; ?>">
								<?php } else {  ?>
									<p class="alt-title"><?php echo $donnees["Pseudo"]; ?> à dejà été bannis par <?php echo $donnees["BanAdmin"]; ?></p>
									<form method="post"><textarea name="icc-text-bannir" placeholder="Motif du bannissement : Prenez en compte que <?php echo $donnees["Pseudo"]; ?> vera cette raison lors de sa connexion."><?php echo $donnees["Ban_Why"]; ?></textarea><br>
									<input class="icc-btn-right" type="submit" name="icc-btn-rebannir" value="Editer le bannissement">
									<input class="icc-btn-left" type="submit" name="icc-btn-debannir" value="Réintégrer <?php echo $donnees["Pseudo"]; ?>">
								<?php }
							?>
							</form>
						</div>


						<div class="alt" id="alt-Theme">
							<p class="icc-center">Les themes sont encore en cours de développement, si vous avez vraiment besion de changer un theme, Merci de contacter un technicien intranet ou Ezra Bridger</p>
						</div>


						<div class="alt" id="alt-HomeType">
							<p class="icc-center">En cours de développement</p>
						</div>


						<div class="alt" id="alt-MailShow">
							<p class="alt-title">Changer l'affichage de l'adresse mail</p>
							<form method="post">
								<select name="icc-text-mailShow">
									<option value="0" <?php if ($donnees["MailShow"] == 0) {echo "selected";} ?>>Afficher l'adresse mail de <?php echo $donnees["Pseudo"]; ?> en publique</option>
									<option value="1" <?php if ($donnees["MailShow"] == 1) {echo "selected";} ?>>Ne pas afficher l'adresse mail de <?php echo $donnees["Pseudo"]; ?> en publique</option>
								</select>
								<input type="submit" name="icc-btn-mailShow" value="Change l'affichage de l'adresse mail">
							</form>
						</div>


						<div class="alt" id="alt-Status">
							<p class="alt-title">Changer l'affichage du status de connexion</p>
							<form method="post">
								<select name="icc-text-status">
									<option value="0" <?php if ($donnees["Status"] == 0) {echo "selected";} ?>>Afficher le status de connexion de <?php echo $donnees["Pseudo"]; ?></option>
									<option value="1" <?php if ($donnees["Status"] == 1) {echo "selected";} ?>>Ne pas le status de connexion de <?php echo $donnees["Pseudo"]; ?></option>
								</select>
								<input type="submit" name="icc-btn-status" value="Change l'affichage du status de connexion">
							</form>
						</div>


						<div class="alt" id="alt-Safe">
							<p class="alt-title">Changer le niveau de protection</p>
							<form method="post">
								<select name="icc-text-safe">
									<option value="0" <?php if ($donnees["Safe"] == 0) {echo "selected";} ?>>Protéger <?php echo $donnees["Pseudo"]; ?> avec le TirnaSafeWeb</option>
									<option value="1" <?php if ($donnees["Safe"] == 1) {echo "selected";} ?>>Ne pas protéger <?php echo $donnees["Pseudo"]; ?> avec le TirnaSafeWeb</option>
								</select>
								<input type="submit" name="icc-btn-safe" value="Changer le niveau de protection">
							</form>
						</div>


						<div class="alt" id="alt-Langue">
							<p class="icc-center">En cours de développement</p>
						</div>


				</div>
			</div>
		</div>
	<?php }
}