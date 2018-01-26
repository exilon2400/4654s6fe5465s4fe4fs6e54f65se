<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/function/fn_refreshSession.php';
	if($_SERVER['HTTP_HOST'] != "dev.local") {
		header("Location: home.php");
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_search.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>
	<title>Tirna | TEST</title>
</head>
<body>
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content" style="overflow-y: scroll;">
		<?php 
			$reponse = $bdd->query('SELECT * FROM site');
			$trigger_index = false;
			for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
				echo $i.'<br>';
				$s = $reponse->fetch();

				if($s["Name"] == "PayLife") {
					echo ' >>> '.$s["Name"].'<br>';
					$trigger_index = true;
				}
				if ($i == $reponse->rowCount() && $trigger_index == false) {
					echo "Impossible de trouver votre élément";
				}
			}
		?>
	</div>
</body>
</html>