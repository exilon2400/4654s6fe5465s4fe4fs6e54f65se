<div id="TIRNA_header_menu">
			<center>
				<a href="clear.php"><div class="TIRNA_header_menu_box">
					<img src="img/exit.svg" width="80px;">
					<p>Deconnexion</p>
				</div></a>
				<div class="TIRNA_header_menu_box" id="userProfile_T">
					<img src="img/account.svg" width="80px;">
					<p>Compte</p>
				</div>
				<div class="TIRNA_header_menu_box" id="settings_T">
					<img src="img/settings.svg" width="80px;">
					<p>Paramètre</p>
				</div>
				<a href="home.php"><div class="TIRNA_header_menu_box">
					<img src="img/home.svg" width="80px;">
					<p>Home</p>
				</div></a>
				
				<a href="console.php"><div class="TIRNA_header_menu_box">
					<img src="img/console.svg" width="80px;">
					<p>Console</p>
				</div></a>
				<a href="search.php"><div class="TIRNA_header_menu_box">
					<img src="img/search.svg" width="80px;">
					<p>Rechercher</p>
				</div></a>

				<div class="TIRNA_header_menu_box" style="background: rgba(0,0,0,0.3);">
					<img src="img/build.svg" width="80px;">
					<p>Indisponnible</p>
				</div>

				<?php if ($_SESSION["AdminGrade"] >= 2) { ?>
					<a href="admin.php"><div class="TIRNA_header_menu_box">
						<img src="img/admin.svg" width="80px;">
						<p>Panneau d'adminitration</p>
					</div></a>
				<?php } else { ?>
					<div class="TIRNA_header_menu_box"  style="background: rgba(0,0,0,0.3);">
						<img src="img/admin.svg" width="80px;">
						<p>Panneau d'adminitration</p>
					</div
				<?php } ?>
			</center>

			<div class="TIRNA_header_menu_title">
				MENU
			</div>
		</div>