<h2>Insertion des tarifs</h2>

<form method="post">
	<table border="0">
		<tr>
				<td>tarif</td>
				<td><input type="number" step="0.01" name="tarif" value="<?php if($leTarif != null) echo $leTarif['tarif']; ?>">
				</td>
		</tr>
		<tr>
				<td>Contrat concernĂ©</td>
				<td><select name ="idcml">
					<?php 
						foreach($lesCML as $unCML){
							echo "<option value='".$unCML['idcml']."'>".$unCML['idcml']." - ".$unCML['descriptif']." ".$unCML['etat_contrat']."</option>";
						}
					 ?>
				</select>
				</td>
		</tr>
		<tr>
				<td>Saison</td>
				<td><select name ="ids">
					<?php 
						foreach($lesSaisons as $uneSaison){
							echo "<option value='".$uneSaison['ids']."'>".$uneSaison['ids']." ".$uneSaison['debut_saison']." - ".$uneSaison['fin_saison']."</option>";
						}
					 ?>
				</select>
				</td>
		</tr>
		<tr>
				<td><input type="reset" name="Annuler" value="Annuler"></td>
				<td><input type="submit" 
				<?php 
				if ($leTarif != null)
					echo ' name ="Modifier" value="Modifier">'; 
				else
					echo ' name="Valider" value="Valider">';
				?>
				</td>
		</tr>		
	</table>
</form>
