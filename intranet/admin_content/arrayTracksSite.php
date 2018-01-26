<?php 
	function printArrayTracksSite($bdd_m) { ?>
		<p class="ALPI_title">Liste des tracks | Intranet</p>
		<p class="ALPI_subtitle">Liste de toute les tracks enregistrer sur l'intranet</p>
		<div class="ALPI_content">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Site</th>
						<th>Utilisateur</th>
						<th>Date</th>
						<th>Page</th>
						<th>Side de l'utilisateur</th>
					</tr>
				</thead>
				<?php
					$reponse = $bdd_m->query('SELECT * FROM tracking_site');
					while ($donnees = $reponse->fetch()) { ?>
						<tbody>
							<tr>
								<td><?php echo $donnees["ID"]; ?></td>
								<td><?php echo $donnees["Site"]; ?></td>
								<td><?php echo $donnees["User"]; ?></td>
								<td><?php echo $donnees["Date"]; ?></td>
								<td><?php echo $donnees["Page"]; ?></td>
								<td><?php echo sidePrint($donnees["Side"],"fr-fr"); ?></td>
							</tr>
						</tbody>
					<?php }
				?>
			</table>
		</div>
	<?php }
?>