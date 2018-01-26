<?php
try {
   $bdd = new PDO('mysql:host=92.222.18.17;dbname=tirna_intranet_v1.0;', 'Tirna', 'Tirnadev01');
} catch(PDOException $e) {
	echo '<meta charset="UTF-8"><div style="position:fixed; color: red;top:50%;left:50%; transform: translateX(-50%) translateY(-50%); font-size: 35px; font-family: sans-serif;">Erreur lors de la connexion à la base de données !<br>Merci de contacter un Administrateur ou un WebMaster :<br>[WebMaster] ExiLon2400 : exilon2400@hotmail.com<br>Discord : <a target="_blank" href="https://discord.gg/GMwPypv">https://discord.gg/GMwPypv</a><p>';
	die();
}
?>