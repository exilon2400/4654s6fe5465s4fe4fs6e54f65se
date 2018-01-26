<?php
    /*$reponse = $bdd->query('SELECT * FROM site');
    while ($donnees = $reponse->fetch()) {
		if ($HR_text == $donnees["LinkShow"]) {
			header("Location: view.php?id=".$donnees["ID"]);
		}
	}*/

	$HRT_parts = pathinfo($_SERVER["PHP_SELF"]);
	$HRTP = $HRT_parts['basename'];

	if(isset($_GET["id"])) {
		$reponse = $bdd->query('SELECT * FROM site');


		$trigger_header_http_view = false;
		for ($htv_for = 1; $htv_for < ($reponse->rowCount()+1); $htv_for++) { 
			$donnees = $reponse->fetch();

			if ($_GET["id"] == $donnees["ID"]) {
				if (isset($_GET["page"])) {
					echo $donnees["LinkShow"]."/".htmlspecialchars($_GET["page"]);
				} else {
					echo $donnees["LinkShow"];
				}
				$trigger_header_http_view = true;
			}
			if ($htv_for == $reponse->rowCount() && $trigger_header_http_view == false) {
				echo "tirna://error.404";
			}
		}
		
	} elseif($HRTP == "index.php") {
		echo "tirna://intranet";
	} elseif($HRTP == "home.php") {
		echo "tirna://home";
	} elseif($HRTP == "search.php") {
		echo "tirna://search";
	} elseif($HRTP == "console.php") {
		echo "tirna://console";
	} elseif($HRTP == "admin.php") {
		echo "tirna://admin";
	} else {
		echo "tirna://404-page-inconnue";
	}
?>