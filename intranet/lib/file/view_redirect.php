<?php 
	if(isset($_GET["id"])) {
		$site_r = $_GET["id"];
		if(isset($_GET["page"])) {
			$page_r = $_GET["page"];
		} else {
			$page_r = "index.php";
		}

		/******************/
		/*      OTAN      */
		/******************/
		if($site_r == 1) {
			if($_SESSION["Side"] == 1) {
	            $bdd->exec("INSERT INTO `tracking_site`(`Site`, `User`, `Page`, `Side`) VALUES ('OTAN : Site officiel','".$_SESSION["Pseudo"]."','".$page_r."','".$_SESSION["Side"]."')");
				header("Location: home.php");
			} elseif($page_r == "compte.php" && $_SESSION["Side"] != 0) {
				header("Location: view.php?id=1&page=index.php");
			}
		}
		/******************/



		/******************/
		/*      URSS      */
		/******************/
		if($site_r == 2) {
			if($_SESSION["Side"] == 0) {
	            $bdd->exec("INSERT INTO `tracking_site`(`Site`, `User`, `Page`, `Side`) VALUES ('URSS : Site officiel','".$_SESSION["Pseudo"]."','".$page_r."','".$_SESSION["Side"]."')");
				header("Location: home.php");
			} elseif($page_r == "compte.php" && $_SESSION["Side"] != 1) {
				header("Location: view.php?id=2&page=index.php");
			}
		}
		/******************/

		

		/******************/
		/*      IDAP      */
		/******************/
		if($site_r == 5) {
			if($page_r == "compte.php" && $_SESSION["Side"] != 2) {
				header("Location: view.php?id=5&page=index.php");
			}
		}
		/******************/
	}
?>