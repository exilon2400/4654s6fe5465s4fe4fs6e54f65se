<?php
	include $path.'partials/header.otan';
?>
<title>Tirna | OTAN - Compte</title>
<div class="OTAN_content">
	<p class="OTC_username">Bienvenu<?php if($_SESSION["Sexe"]==1){echo "e";} echo ' '.$_SESSION["Pseudo"];?></p>
	<div class="OTC_menu">
		<div class="OTC_menu_btn OTCMBPL">
			<img src="img/home.svg" width="80px;">
			<p>PayLife</p>
		</div>
		<div class="OTC_menu_btn">
			<img src="img/home.svg" width="80px;">
			<p>Mes demande</p>
		</div>
		<p style="text-align: center; margin: 20px; color: #FFF"> En cour de développement...</p>
	</div>
</div>