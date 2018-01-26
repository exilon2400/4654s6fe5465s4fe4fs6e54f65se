<?php 
	function printAdminProfile() { ?>
		<div class="ProfileAdminPlayer">
			<!-- <div class="statusProfile"></div> -->
			<label><?php echo $_SESSION["Pseudo"]; ?></label>
			<p><?php echo adminGradePrint($_SESSION["AdminGrade"],$_SESSION["Langue"]); ?></label>
		</div>
	<?php }
?>