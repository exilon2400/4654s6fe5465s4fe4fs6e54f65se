<?php
	include $path.'partials/header.urss';
?>
<title>Tirna | URSS - Information</title>
<div class="URSS_content">
	<p class="UTC_username">Priviet, <?php echo ' '.$_SESSION["Pseudo"];?></p>
	<p id="URSS_information">Ici on ne plaisante pas, pour nous présenter, nous pouvons dire que nous sommes un état qui possède une partie situé au sud de l'île de Malden, Nous sommes une force assez puissante, en effet nous possédons une armée dirigée par le général Bélentofe avec ses fidèles soldats et son artillerie au top !</p>
	<p id="URSS_information_2">Pour la rejoindre, cliquez ci-dessous !</p>
	<input id="URSS_Boutton_Recrutement" type="button" value="Recrutement" onclick="window.location.href='<?php goto_t($id, "recrutement.php"); ?>'" />
</div>