<div class="lefttopside">
	<div class="lts_center">
		<p class="usradmin"><?php echo $_SESSION["Pseudo"]; ?></p>
	<p class="permadmin"><?php echo adminGradePrint($_SESSION["AdminGrade"], $_SESSION["Langue"]); ?></p>
	</div>
</div>
<nav class="navadmin">
	<?php if(isset($_GET["edit"])) {
		if ($_GET["edit"] == 1) { ?>
			<a href="admin.php">Retour</a>
			<a href="admin.php?edit=1&playerId=<?php echo $_GET["playerId"]; ?>">Editer</a>
		<?php } elseif($_GET["edit"] == 2) { ?>
			<a href="admin.php">Retour</a>
			<a href="admin.php?edit=2&sideId=<?php echo $_GET["sideId"]; ?>">Editer</a>
		<?php }
	} else { ?>
		<a href="#" id="profile">Mon profil</a>
		<a href="#" id="listPlayerIntranet">Liste des joueurs | Intranet</a>
		<a href="#" id="listSite">Liste des sites</a>
		<a href="#" id="listTrackSite">Liste des tracks des sites</a>
	<?php }?>
</nav>