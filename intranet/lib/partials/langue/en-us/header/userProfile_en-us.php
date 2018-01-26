<div class="TIRNA_header_userProfile">
	<div class="TIRNA_header_userProfile_topLeft userBox"><?php echo sidePrint($_SESSION["Side"], $_SESSION["Langue"]); ?></div>
	<div class="TIRNA_header_userProfile_topRight userBox"><?php echo gradePrint($_SESSION["Grade"], $_SESSION["Side"], $_SESSION["Langue"]); ?></div>
	<div class="TIRNA_header_userProfile_bottomRight userBox"><?php echo $_SESSION["Email"]; ?></div>
	<div class="TIRNA_header_userProfile_bottomLeft userBox"><?php echo sexePrint($_SESSION["Sexe"], $_SESSION["Langue"]); ?></div>
	<div class="TIRNA_header_userProfile_middle userBox"><?php echo $_SESSION["Pseudo"]; ?></div>
	<div class="userbox TIRNA_header_userProfile_close">Back</div>
</div>