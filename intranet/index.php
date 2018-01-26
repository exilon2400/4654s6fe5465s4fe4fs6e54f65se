<?php 
	session_start();
	include_once 'lib/function/fn_isConnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/file/index_script.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>
	<script src="js/animation/index/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style_index.css">
	<title>Tirna | Home</title>
</head>
<body>
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content" style="background: rgba(0,0,0,0.1)">
		<div class="MAIN_Form">
			<nav class="select">
				<p id="connexionS" style="float: left; margin-left: 60px;">Connexion</p>
				<div class="spacer"></div>
				<p id="inscriptionS" style="float: right; margin-right: 60px;">Inscription</p>
				<br style="clear: both;">
			</nav>
			<div class="connexion"><form method="POST">
					<p>Pseudo (RolePlay | Exemple : Jean LARUE) <color>*</color></p>
					<input type="text" required name="pseudo_c" placeholder="Jean LARUE">
					<br><br>
					<p>Mot de passe <color>*</color></p>
					<input type="password" required name="password1_c" placeholder="MonSuperMotDePasse12300">
					<br><br>
					<input type="submit" name="connexion_c" value="Connexion">
				</form>
			</div>
			<div class="inscription">
				<form method="POST">
					<p>Pseudo (RolePlay | Exemple : Jean LARUE) <color>*</color></p>
					<input type="text" required name="pseudo_i" placeholder="Jean LARUE">
					<br><br>
					<p>Mot de passe <color>*</color></p>
					<input type="password" required name="password1_i" placeholder="MonSuperMotDePasse12300">
					<br><br>
					<p>Confirmer le mot de passe <color>*</color></p>
					<input type="password" required name="password2_i" placeholder="MonSuperMotDePasse12300">
					<br><br>
					<p>Email <color>*</color></p>
					<input type="email" required name="email_i" placeholder="exemple@domain.com">
					<br><br>
					<p>Sexe <color>*</color></p>
					<select name="sexe_i">
						<option value="1">Femme</option>
						<option value="0">Homme</option>
					</select>
					<br><br>
					<p>Side <color>*</color></p>
					<select name="side_i">
						<option value="0">OTAN</option>
						<option value="1">URSS</option>
						<option value="2">IDAP</option>
					</select>
					<br><br>
					<input type="submit" name="inscription_i" value="Inscription">

				</form>
			</div>
		</div>
	</div>
</body>
</html>