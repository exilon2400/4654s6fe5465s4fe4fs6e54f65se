<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/function/fn_refreshSession.php';
	if(!isset($_GET["id"])) {
		header("Location: home.php");
	}
	include 'lib/file/view_redirect.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_view.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="js/jquery.js"></script>
	<script src="js/velocity.js"></script>

	<script type="text/javascript">
		(function($) {
			$(document).ready(function() {
		        $('.TS_rs_site').velocity("transition.fadeIn",{
		        	stagger: 120,
	                duration: 1500,
	                display : 'block'
        		});
   			});
		})(jQuery);
	</script>
</head>
<body>
	<?php 
		include 'lib/partials/primary/header.php';
		include 'lib/function/fn_getPath.php';
		include 'lib/function/fn_goTo.php';
	?>
	<div class="content">
		<?php
			$id = $_GET["id"];
            $reponse = $bdd->query('SELECT * FROM site');


			$trigger_view = false;
			for ($i = 1; $i < ($reponse->rowCount()+1); $i++) { 
				$donnees = $reponse->fetch();
				if ($donnees["ID"] == $id) {
            		if ($donnees["Side"] == $_SESSION["Side"]) {
            			$path = $donnees["Link"];
	            		try {
	            			if(isset($_GET["page"])) {
	            				include $path.htmlspecialchars($_GET["page"]);
	            			} else {
	            				include $path."index.php";
	            			}
	            		} catch (Exception $e) {
	            			echo "Erreur 404 - Contactez un adminitrateur au plus vite. (Code : 404-1)";
	            		}
            		} elseif($_SESSION["Side"] == 2) {
            			$path = $donnees["Link"];
	            		try {
	            			if(isset($_GET["page"])) {
	            				include $path.htmlspecialchars($_GET["page"]);
	            			} else {
	            				include $path."index.php";
	            			}
	            		} catch (Exception $e) {
	            			echo "Erreur 404 - Contactez un adminitrateur au plus vite. (Code : 404-1)";
	            		}
            		} elseif($donnees["Side"] == 4) {
            			$path = $donnees["Link"];
	            		try {
	            			if(isset($_GET["page"])) {
	            				include $path.htmlspecialchars($_GET["page"]);
	            			} else {
	            				include $path."index.php";
	            			}
	            		} catch (Exception $e) {
	            			echo "Erreur 404 - Contactez un adminitrateur au plus vite. (Code : 404-1)";
	            		}
            		}
			 		$trigger_view = true;
            	}
				if ($i == $reponse->rowCount() && $trigger_view == false) {
	            	include "site_content/error/404.php";
				}
			}
		?>
	</div>
</body>
</html>