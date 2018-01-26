<div class="TIRNA_header_settings">
	<form method="post">
		<div class="THS_center">
			<div class="stagger_THS">
				<p class="TIRNA_header_settings_subtitle">Mon Compte</p>
				<p id="THS_compte" style="<?php if($_SESSION["Side"] == 0) {echo"border: 1px solid #2874A6;";} if($_SESSION["Side"] == 1) {echo"border: 1px solid #cc0030;";} if($_SESSION["Side"] == 2) {echo"border: 1px solid #BA4A00;";} ?>"><img src="img/account_light-black.svg" width="80px;"><label>[<?php echo gradePrint($_SESSION["Grade"], $_SESSION["Side"], $_SESSION["Langue"]); ?> de l'<?php echo sidePrint($_SESSION["Side"], $_SESSION["Langue"]); ?>] <?php echo $_SESSION["Pseudo"]; ?><br><email><?php echo $_SESSION["Email"]; ?></email></label><br style="clear: both;"></p>
			</div>
			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<p class="TIRNA_header_settings_subtitle">Apparence</p>
					<p id="THS_Apparance_Theme">Thèmes</p>
					<select name="THS_theme">
						<option value="Default" <?php if($_SESSION["Theme"] == "Default") {echo "selected";} ?>>Defaut</option>
						<option value="Green" <?php if($_SESSION["Theme"] == "Green") {echo "selected";} ?>>Vert</option>
						<option value="Yellow" <?php if($_SESSION["Theme"] == "Yellow") {echo "selected";} ?>>Jaune</option>
						<option value="Cyan" <?php if($_SESSION["Theme"] == "Cyan") {echo "selected";} ?>>Cyan</option>
						<option value="Purple" <?php if($_SESSION["Theme"] == "Purple") {echo "selected";} ?>>Violet</option>
						<?php if ($_SESSION["AdminGrade"] >= 11) { ?>
							<option value="Darkblue" <?php if($_SESSION["Theme"] == "Darkblue") {echo "selected";} ?>>Le thême des dieux</option>
						<?php } ?>
					</select>
			</div>
			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<p class="TIRNA_header_settings_subtitle">Au démarrage</p>
					<p>Ouvrir la page "Home" | Ouvrir une page spécifique : En cours de développement</p>
			</div>
			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<p class="TIRNA_header_settings_subtitle">Confidentialité et sécurité</p>
					<label>Afficher mon adresse mail</label>
					<select name="THS_showMail">
						<option value="0" <?php if($_SESSION["MailShow"] == 0) {echo "selected";} ?>>Je souhaite afficher mon adresse mail à tous</option>
						<option value="1" <?php if($_SESSION["MailShow"] == 1) {echo "selected";} ?>>Je souhaite que mon adresse mail ne sois pas affichée</option>
					</select><br><br>

					<label>Passer en mode Invisible</label>
					<select name="THS_anonymous">
						<option value="0" <?php if($_SESSION["Status"] == 0) {echo "selected";} ?>>Je souhaite afficher mon état de connexion</option>
						<option value="1" <?php if($_SESSION["Status"] == 1) {echo "selected";} ?>>Je souhaite rester anonyme</option>
					</select><br><br>

					<label>Eviter les sites dangereux</label>
					<select name="THS_dangereux">
						<option value="0" <?php if($_SESSION["Safe"] == 0) {echo "selected";} ?>>Je souhaite être <?php if($_SESSION["Sexe"] == 0){ echo "protègé";} else {echo "protègée";} ?> par le TirnaSafeWeb</option>
						<option value="1" <?php if($_SESSION["Safe"] == 1) {echo "selected";} ?>>Je ne souhaite pas être <?php if($_SESSION["Sexe"] == 0){ echo "protègé";} else {echo "protègée";} ?>, à mes risque !</option>
					</select><br><br>
			</div>
			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<p class="TIRNA_header_settings_subtitle">Langues</p>
					<label>Langue utiliser</label>
					<select name="THS_langue">
						<option value="fr-fr" <?php if($_SESSION["Langue"] == "fr-fr") {echo "selected";} ?>>Français</option>
					</select>
			</div>
			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<p class="TIRNA_header_settings_subtitle">Réinitialiser</p>
					<p id="THS_restart">Réinitialiser les parametres par défaut</p>
					<div class="THS_restore">
						<p>Une fois la réinitialisation faite, il est impossible de revenir en arrière. Cette réinitialisation vous permez de remettre tous vos paramètres comme une fois le compte créer et réactualise toutes vos données de compte (Email, Paramètre, Side, Rôle, Pseudo). Si vous souhaitez sauvarger toute vos données utilisateur vous devez envoyer un mail à l'adresse suivant : exilon2400@hotmail.com (avec comme titre "Sauvargarde de (Votre pseudo)") ou vous rendre directement sur le discord, notre équipe de développement s'engage à garder vos données sauvegarder pendant 2 semaine pour réclamation, au-dela de ce delais, tous les données sauvgardées seront supprimées.</p>
						<center>
							<button name="restore_yes" id="restore_yes">OUI</button>
							<label name="NONE" id="restore_no">NON</label>
						</center>
					</div>
					<br><br><br><br>
			</div>


			<div class="stagger_THS">
				<div class="THS_spacer"></div>
				<div class="THS_disclaimer">
					<p><color style="color: red; font-weight: bold;">ATTENTION</color> : Seule les [WebMasters], [Administrateurs], [Modérateurs] peuvent voir vos données personnel (sauf mot de passse qui est crypter), ces même membres du staff s'engages à ne pas divulger vos informations ! <br><br>Bien à vous,<br>Très cordialement l'équipe de <color style="color: blue; font-weight: bold;">Tirna</color></p>
				</div>
				<br><br>
				<button name="THS_save" class="TIRNA_header_settings_save">Sauvegarder</button>
				<div class="TIRNA_header_settings_close">Retour</div>
			</div>
		</div>
	</form>
</div>