<?php 
	function printArraySite($bdd_m) { ?>
		<p class="ALPI_title">Liste des sites | Intranet</p>
		<p class="ALPI_subtitle">Liste de toute les sites enregistrer sur l'intranet</p>
		<div class="ALPI_content">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nom du site</th>
						<th>Lien du site</th>
						<th>Side</th>
						<th>Option</th>
					</tr>
				</thead>
				<?php
					$reponse = $bdd_m->query('SELECT * FROM site');
					while ($donnees = $reponse->fetch()) { ?>
						<tbody>
							<tr>
								<td><?php echo $donnees["ID"]; ?></td>
								<td><?php echo $donnees["Name"]; ?></td>
								<td><?php echo $donnees["LinkShow"]; ?></td>
								<td><?php echo sidePrint($donnees["Side"],"fr-fr"); ?></td>
								<td><a href="admin.php?edit=2&sideId=<?php echo $donnees["ID"]; ?>" class="ALPI_btn">Editer</a></td>
							</tr>
						</tbody>
					<?php }
				?>
			</table>
		</div>
	<?php }
?>