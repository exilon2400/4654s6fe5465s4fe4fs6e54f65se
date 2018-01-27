<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/function/fn_refreshSession.php';
	include_once 'lib/function/fn_adminGradePrint.php';
	if(isset($_POST["btn_s_TS"])) {
		$search_TS = htmlspecialchars($_POST["search_TS"]);
		$_SESSION["TIRNA_VAR_search"] = $search_TS;
		header("Location: search.php");
	}
	if($_SESSION["AdminGrade"] == 0 || $_SESSION["AdminGrade"] == 1) {
		header("Location: home.php");
	}

	if(isset($_POST)) {
		include 'admin_content/script/fn_edit_1.php';
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_admin.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>
	<script src="js/animation/admin/adminMenuPlay.js"></script>
	<title>Tirna | Panneau d'administration</title>
</head>
<body>
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content">
		<div class="leftside">
			<?php include_once 'admin_content/adminMenu.php'; ?>
		</div>
		<div class="rightside">
			<?php
				if (isset($_GET["edit"])) {
					$mode = $_GET["edit"];
					if ($mode == 1) {
						include 'admin_content/edit/edit_1.php';
					} elseif ($mode == 2) {
						
					} else {

					}
				} else { ?>
					<div class="adminContent adminProfile">
						<?php include_once 'admin_content/adminProfile.php'; printAdminProfile(); ?>
					</div>
					<div class="adminContent adminListePlayerIntranet">
						<?php include_once 'admin_content/arrayPlayerIntranet.php'; printArrayPlayerIntranet($bdd); ?>
					</div>
					<div class="adminContent adminListeSite">
						<?php include_once 'admin_content/arraySite.php'; printArraySite($bdd); ?>
					</div>
					<div class="adminContent adminListeTrackSite">
						<?php include_once 'admin_content/arrayTracksSite.php'; printArrayTracksSite($bdd); ?>
					</div>
				<?php }
			?>
		</div>
	</div>
</body>
</html>