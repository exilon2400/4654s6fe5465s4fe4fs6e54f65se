<?php 
	session_start();
	include 'lib/function/fn_isDisconnected.php';
	include_once 'lib/master/init.php';
	include_once 'lib/function/fn_refreshSession.php';
	if(!isset($_SESSION["TIRNA_VAR_search"])) {
		header("Location: home.php");
	}
	if(isset($_POST["btn_s_TS"])) {
		$search_TS = htmlspecialchars($_POST["search_TS"]);
		$_SESSION["TIRNA_VAR_search"] = $search_TS;
		header("Location: search.php");
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
	<title>Tirna | <?php echo htmlspecialchars($_SESSION["TIRNA_VAR_search"]); ?></title>

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
	<?php include 'lib/partials/primary/header.php'; ?>
	<div class="content">
		<div class="TS_left-side">
			<div class="TS_center">
				<h1>RECHERCHER</h1>
				<form method="post">
					<div class="TS_search">
						<input type="text" name="search_TS" placeholder="Rechercher..." <?php if(isset($_SESSION["TIRNA_VAR_search"])){echo 'value="'.$_SESSION["TIRNA_VAR_search"].'"';}?>>
						<button name="btn_s_TS"><img src="img/search.png" alt="S"></button>
						<br style="clear: both;">
					</div>
				</form>
			</div>
			<div class="TS_left-side_liner"></div>
			<div class="TS_left-side_content">

			</div>
		</div>
		<div class="TS_middle_liner"></div>
		<div class="TS_right-side">
			<?php 
				$key = htmlspecialchars($_SESSION["TIRNA_VAR_search"]);
				if($key != "") {
					$reponse = $bdd->query('SELECT * FROM site WHERE Name LIKE "%'.$key.'%" ORDER BY Name');
				} else {
					$reponse = $bdd->query('SELECT * FROM site WHERE Name LIKE "%%" ORDER BY Name');
				}

				if($reponse->rowCount() == 0) {
                	?>
	            		<div class="TS_rs_site">
							<p class="TSR_title">Impossible de trouver le site : <?php echo $key; ?></p><br>
						</div>
                	<?php 
				} else {
					while ($donnees = $reponse->fetch()) { 
	                	if ($_SESSION["Side"] == $donnees["Side"] || $donnees["Side"] == 4) {
	                		if($donnees["Grade"] <= $_SESSION["Grade"]) {
	                			if($donnees["DarkSide"] == 0) {
				                	?>
					            		<div class="TS_rs_site">
											<a href="view.php?id=<?php echo $donnees["ID"]; ?>" class="TSR_title"><?php echo $donnees["Name"]; ?></a><br>
											<a href="view.php?id=<?php echo $donnees["ID"]; ?>" class="TSR_link"><?php echo $donnees["LinkShow"]; ?></a>
											<p class="TSR_description"><?php echo $donnees["Description"]; ?></p>
										</div>
				                	<?php 
	                			}
	                		}
	                	} elseif ($_SESSION["Side"] == 2) {
	                		if($donnees["Grade"] <= $_SESSION["Grade"]) {
	                			if($donnees["DarkSide"] == 0) {
				                	?>
					            		<div class="TS_rs_site">
											<a href="view.php?id=<?php echo $donnees["ID"]; ?>" class="TSR_title"><?php echo $donnees["Name"]; ?></a><br>
											<a href="view.php?id=<?php echo $donnees["ID"]; ?>" class="TSR_link"><?php echo $donnees["LinkShow"]; ?></a>
											<p class="TSR_description"><?php echo $donnees["Description"]; ?></p>
										</div>
				                	<?php 
	                			}
	                		}
	                	}
	            	}
				}
                
            ?>
		</div>
	</div>
</body>
</html>