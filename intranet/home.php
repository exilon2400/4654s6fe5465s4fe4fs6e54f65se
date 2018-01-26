<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	if(isset($_POST["btn_s_THoC"])) {
		$search_THoC = htmlspecialchars($_POST["search_THoC"]);
		$_SESSION["TIRNA_VAR_search"] = $search_THoC;
		header("Location: search.php");
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>
	<title>Tirna | Intranet</title>
</head>
<body>
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content">
		<div class="THoC_center">
			<h1>TIRNA</h1>
			<form method="post">
				<div class="THoC_search">
					<input type="text" name="search_THoC" placeholder="Rechercher..." <?php if(isset($_SESSION["TIRNA_VAR_search"])){echo 'value="'.$_SESSION["TIRNA_VAR_search"].'"';}?>>
					<button name="btn_s_THoC"><img src="img/search.png" alt="S"></button>
					<br style="clear: both;">
					<?php 
						if(isset($_GET["reinit"])) {
							echo '<p style="text-align: center; font-size: 20px; text-transform: uppercase;">Votre compte à bien était réinitialisé !</p>';
						} elseif (isset($_GET["chargeUserSettings"])) {
							echo '<p style="text-align: center; font-size: 20px; text-transform: uppercase;">Vos nouveau paramètre on bien sauvegardé !</p>';
						}
					?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>