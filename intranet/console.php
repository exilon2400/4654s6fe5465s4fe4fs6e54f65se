<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/function/fn_refreshSession.php';

	if(!isset($_SESSION["TIRNA_COMMAND"])) {
		$_SESSION["TIRNA_COMMAND"] = "";
	}
	if(!isset($_SESSION["TIRNA_COMMAND_COLOR"])) {
		$_SESSION["TIRNA_COMMAND_COLOR"] = "#090";
	}

	if(isset($_POST["send"])) {
		$CMASTER = $_POST["command"];
		$command = htmlspecialchars($CMASTER);
		$args = explode(" ", $command);
		if ($command != null) {
			include 'lib/file/command.php';
		} else {
			$_SESSION["TIRNA_COMMAND"] = $_SESSION["TIRNA_COMMAND"].' > '.' Merci de tapez votre commande dans la barre sous la console !<br>';
		}
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_console.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>
	<title>Tirna | Console</title>
</head>
<body>
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content">
		<form method="post" class="console">
			<p class="console-main" style="color: <?php echo $_SESSION["TIRNA_COMMAND_COLOR"];?>;"><?php echo $_SESSION["TIRNA_COMMAND"]; ?></p><br><br>
			<input class="console-command" type="text" name="command" placeholder="Entrez votre commande." autofocus><br><br>
			<input class="console-submit" type="submit" name="send" value="Executez">
		</form>
	</div>
</body>
</html>