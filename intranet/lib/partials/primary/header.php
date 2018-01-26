<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style_header.css">
<?php
	if(isset($_SESSION["ID"])) {
		include_once 'lib/function/fn_refreshSession.php';
		if($_SESSION["Theme"] == "Default") {
			echo '<link rel="stylesheet" type="text/css" href="css/theme/'.$_SESSION["Side"].'.css">';
		} else {
			echo '<link rel="stylesheet" type="text/css" href="css/theme/'.$_SESSION["Theme"].'.css">';
		}
	} else {
		echo '<link rel="stylesheet" type="text/css" href="css/theme/unconnected.css">';
	}
	$content_page_self = pathinfo($_SERVER["PHP_SELF"]);
	$content_page_self_bn = $content_page_self['basename'];
	$content_page_self_fn = $content_page_self['filename'];
	if ($content_page_self_fn != "console") {
		if(!isset($_SESSION["TIRNA_LAST_SITE"])) {
			if($content_page_self_fn == "view") {
				if(isset($_GET["page"])) {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn.'?id='.$_GET["id"].'&page='.$_GET["page"];
				} else {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn.'?id='.$_GET["id"];
				}
			} else {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn;
			}
		} else {
			if($content_page_self_fn == "view") {
				if(isset($_GET["page"])) {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn.'?id='.$_GET["id"].'&page='.$_GET["page"];
				} else {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn.'?id='.$_GET["id"];
				}
			} else {
					$_SESSION["TIRNA_LAST_SITE"] = $content_page_self_bn;
			}
		}
	}
?>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<!-- <script src="http://exilon2400.ovh/api/velocity.js"></script> -->
<header>
	<?php 
		if(isset($_POST["TIRNA_header_reserch_button"])) {
			include 'lib/file/header_http.php';
		}
		if(isset($_SESSION["Pseudo"])) {
			echo '<style type="text/css">.TIRNA_header_part2_textbox {width: 65%;}</style>';
		} else {
			echo '<style type="text/css">.TIRNA_header_part2_textbox {width: 73%;}</style>';
		}

		if(isset($_POST["restore_yes"])) {
			$bdd->exec("UPDATE `users` SET `Theme`='Default',`HomeType`='Home',`MailShow`='1',`Status`='0',`Safe`='0',`Langue`='fr-fr' WHERE id='".$_SESSION["ID"]."'");
			header("Location: home.php?reinit");
		}

		if(isset($_POST["THS_save"])) {
			$theme = $_POST["THS_theme"];
			$showMail = $_POST["THS_showMail"];
			$anonymous = $_POST["THS_anonymous"];
			$dangerous = $_POST["THS_dangereux"];
			$langue = $_POST["THS_langue"];

			$bdd->exec("UPDATE `users` SET `Theme`='".$theme."',`HomeType`='Home',`MailShow`='".$showMail."',`Status`='".$anonymous."',`Safe`='".$dangerous."',`Langue`='".$langue."' WHERE id='".$_SESSION["ID"]."'");
			header("Location: home.php?chargeUserSettings");
		}
	?>

	<div class="TIRNA_header_part1"><p class="TIRNA_header_part1_title">TIRNA</p></div>
	<div class="TIRNA_header_part2">
		<img src="img/arrow.png" onclick="history.go(-1);" id="arrow_backward" alt="B">
		<img src="img/arrow_2.png" onclick="history.go(1);" id="arrow_frontward" alt="F">
		<?php if (isset($_SESSION["Pseudo"])){ ?>
			<img src="img/settings.png" id="arrow_frontward" class="settings" alt="S">
			<a href="clear.php"><img src="img/exit.png" id="arrow_frontward" alt="D"></a>
		<?php } ?>
		<a href="home.php"><img src="img/home.png" id="home" alt="H"></a>
		<br style="clear: both;">
		<div class="TIRNA_header_part2_textbox">
			<form method="post">
				<input type="text" name="TIRNA_header_reserch_textbox" placeholder="Taper votre url ..." value="<?php include 'lib/file/header_http_view.php'; ?>">
				<button name="TIRNA_header_reserch_button"><img src="img/search.png" alt="S"></button>
				<br style="clear: both;">
			</form>
		</div>
	</div>
</header>
<?php if (isset($_SESSION["Pseudo"])){ ?>
	<script src="js/animation/header/header.js"></script>
	<div class="TIRNA_header_compte">
		<div class="TIRNA_header_gradient"></div>
		<?php 
			include 'lib/function/fn_sidePrint.php';
			include 'lib/function/fn_gradePrint.php';
			include 'lib/function/fn_sexePrint.php';

			if($_SESSION["Langue"] == "fr-fr") {
				include 'lib/partials/langue/fr-fr/header/menu_fr-fr.php';
				include 'lib/partials/langue/fr-fr/header/userProfile_fr-fr.php';
				include 'lib/partials/langue/fr-fr/header/settings_fr-fr.php';
			} elseif($_SESSION["Langue"] == "en-us") {
				include 'lib/partials/langue/en-us/header/menu_en-us.php';
				include 'lib/partials/langue/en-us/header/userProfile_en-us.php';
				include 'lib/partials/langue/en-us/header/settings_en-us.php';
			}
		?>
	</div>
<?php } ?>