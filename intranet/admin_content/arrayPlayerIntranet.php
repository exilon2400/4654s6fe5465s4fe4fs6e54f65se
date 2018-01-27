<?php 
	function printArrayPlayerIntranet($bdd_m) { ?>
		<p class="ALPI_title">Liste des joueurs | Intranet</p>
		<p class="ALPI_subtitle">Liste de toute les personnes enregistrer sur l'intranet</p>
		<div class="ALPI_content">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Pseudo</th>
						<th>Niveau d'administration</th>
						<th>Side</th>
						<th>Option</th>
					</tr>
				</thead>
				<?php
					$reponse = $bdd_m->query('SELECT * FROM users');
					while ($donnees = $reponse->fetch()) { ?>
						<tbody>
							<tr>
								<td><?php echo $donnees["ID"]; ?></td>
								<td><?php if ($donnees["Ban"] == 1) { echo '<color style="color:red;">'.$donnees["Pseudo"].'</color>'; } else { echo $donnees["Pseudo"]; } ?> </td>
								<td><?php echo adminGradePrint($donnees["AdminGrade"],$donnees["Langue"]); ?></td>
								<td><?php echo sidePrint($donnees["Side"],$donnees["Langue"]); ?></td>
								<td><a href="admin.php?edit=1&playerId=<?php echo $donnees["ID"]; ?>" class="ALPI_btn">Editer</a></td>
							</tr>
						</tbody>
					<?php }
				?>
			</table>
		</div>
	<?php }
?>