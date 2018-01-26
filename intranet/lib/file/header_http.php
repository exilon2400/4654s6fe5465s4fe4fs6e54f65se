<?php
	$HR_btn = $_POST["TIRNA_header_reserch_button"];
	$HR_text = htmlspecialchars($_POST["TIRNA_header_reserch_textbox"]);


	if(!empty($HR_text)) {
		if ($HR_text == "tirna://home") {
			header("Location: home.php");
		} elseif ($HR_text == "home") {
			header("Location: home.php");
		} elseif ($HR_text == "tirna://search") {
			header("Location: search.php");
		} elseif ($HR_text == "search") {
			header("Location: search.php");
		} elseif ($HR_text == "tirna://admin") {
			header("Location: admin.php");
		} elseif ($HR_text == "admin") {
			header("Location: admin.php");
		} else {
			$reponse = $bdd->query('SELECT * FROM site');
			$trigger_http_host_r = false;
			for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
				$donnees = $reponse->fetch();
				if ($HR_text == $donnees["LinkShow"]) {
					header("Location: view.php?id=".$donnees["ID"]);
					$trigger_http_host_r = true;
				}
				
				if ($i == $reponse->rowCount() && $trigger_http_host_r == false) {
					$_SESSION["TIRNA_VAR_search"] = htmlspecialchars($HR_text);
					header("Location: search.php");
				}
			}
		}
	} else {
		header("Location: home.php");
	}
?>