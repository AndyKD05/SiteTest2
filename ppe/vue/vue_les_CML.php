<h3> Liste des contrats de mandat locatif </h3>
</br>
<form method="post">
	Mot de recherche: <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
</br>
<table border="1"> 
<tr>
<?php 	if (isset($_SESSION['email']) and $_SESSION['role']=="emp")
{
	echo"<td> id contrat </td>";
}?>
	<td> Descriptif</td>
	<td> debut du contrat </td>
	<td> fin du contrat </td>
	<td> Etat du contrat </td>
	<td> Proprietaire </td>
	<td> Habitation </td>

<?php 	if (isset($_SESSION['email']) and $_SESSION['role']=="emp")
{
	echo	"<td> Opérations </td>";
} ?>
</tr>

<?php  
foreach ($lesCML as $unCML){
	echo "<tr>";
	if(($unCML['idp']==$_SESSION['id'] and $_SESSION['role']=="prop") or $_SESSION['role']=="emp")
	{
		if (isset($_SESSION['email']) and $_SESSION['role']=="emp")
		{
			echo"<td>".$unCML['idcml']."</td>";
		}
		echo"
			<td>".$unCML['descriptif']."</td>
			<td>".$unCML['date_debut_cml']."</td>
			<td>".$unCML['date_fin_cml']."</td>
			<td>".$unCML['etat_contrat']."</td>
			<td>".$unCML['idp']." ".$unCML['prenom_p']." ".$unCML['nom_p']."</td>
			<td>".$unCML['idh']." ".$unCML['nom_immeuble_h']." ".$unCML['ville_h']."</td>
			";
	}
	if (isset($_SESSION['email']) and $_SESSION['role']=="emp")
	{
		echo "
		<td>
		<a href='index.php?page=7&action=sup&idcml=".$unCML['idcml']."'><img src='images/sup.png' height='30' width='30'><a/>
		<a href='index.php?page=7&action=edit&idcml=".$unCML['idcml']."'><img src='images/edit.jpg' height='30' width='30'><a/>
		</td>
		";
	}
	echo "</tr>";
}
?>
</table>