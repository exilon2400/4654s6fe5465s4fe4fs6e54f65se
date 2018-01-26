<div class="TIRNA_header_settings">
	<div class="THS_center">
		<form method="post">
			<p class="TIRNA_header_settings_subtitle">My account</p>
				<p id="THS_compte" style="<?php if($_SESSION["Side"] == 0) {echo"border: 1px solid rgb(29,126,224);";} if($_SESSION["Side"] == 1) {echo"border: 1px solid rgb(234,19,19);";} if($_SESSION["Side"] == 2) {echo"border: 1px solid rgb(224,132,29);";} ?>"><img src="http://exilon2400.ovh/api/tirna/img/account.svg" width="80px;"><label>[<?php echo gradePrint($_SESSION["Grade"], $_SESSION["Side"], $_SESSION["Langue"]); ?>] <?php echo $_SESSION["Pseudo"]; ?><br><email><?php echo $_SESSION["Email"]; ?></email></label><br style="clear: both;"></p>
		<div class="THS_spacer"></div>
			<p class="TIRNA_header_settings_subtitle">Appearance</p>
				<p id="THS_Apparance_Theme">Theme</p>
		<div class="THS_spacer"></div>
			<p class="TIRNA_header_settings_subtitle">Start Settings</p>
				<p>Open "Home" | Open other page : Work in progress</p>
		<div class="THS_spacer"></div>
			<p class="TIRNA_header_settings_subtitle">Personnel information and security</p>
				<label>Show my Mail</label>
				<select name="THS_showMail">
					<option value="0">I want my mail address to be displayed to all</option>
					<option value="1">I want my email address not to be displayed</option>
				</select><br><br>

				<label>Switch to anonymous mode</label>
				<select name="THS_anonymous">
					<option value="0">I wish to display my connection status</option>
					<option value="1">I wish to remain anonymous</option>
				</select><br><br>

				<label>Privante dangerous sites</label>
				<select name="THS_dangereux">
					<option value="0">I wish to be protected by TirnaSafeWeb</option>
					<option value="1">I don't wish to be protected, I'm fully aware of the consequence !</option>
				</select><br><br>
		<div class="THS_spacer"></div>
			<p class="TIRNA_header_settings_subtitle">Language</p>
				<label>Used Language</label>
				<select name="THS_langue">
					<option value="0" <?php if($_SESSION["Langue"] == "fr-fr") {echo "selected";} ?>>Français</option>
					<option value="1" <?php if($_SESSION["Langue"] == "en-us") {echo "selected";} ?>>English - In dev</option>
					<option value="2" <?php if($_SESSION["Langue"] == "it-it") {echo "selected";} ?>>Italiano - In dev</option>
				</select>
		<div class="THS_spacer"></div>
			<p class="TIRNA_header_settings_subtitle">Reinitialzed</p>
				<p id="THS_restart">Go to default settings</p>
		</form>
		<div class="THS_spacer"></div>
		<div class="THS_disclaimer">
			<p><color style="color: red; font-weight: bold;">WARNING</color> : Seule les [WebMasters], [Administrateurs], [Modérateurs] peuvent voir vos données personnel (sauf mot de passse qui crypter), ces même membres du staff s'engages à ne pas divulger vos informations ! <br><br>Bien à vous,<br>Très cordialement l'équipe de <color style="color: blue; font-weight: bold;">Tirna</color></p>
		</div>
		<div class="TIRNA_header_settings_close">Back</div>
	</div>
</div>