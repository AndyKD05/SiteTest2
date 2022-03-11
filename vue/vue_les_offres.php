  <!-- pour faciliter l’ergonomie de l’utilisateur : 
  Tableau avec lignes colorées alternativement, etc.
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   

 <!-- pour faciliter l’ergonomie de l’utilisateur : utilisation des librairie de styles du plugin DataTables de CDN en plus de la librairie jQuery 
      - la possibilité de trier ces données à la volé (sur une ou plusieurs colonnes), 
	    mettre au pied de ce tableau une pagination, insérer une boite de recherche dynamique, etc.
	  - la possibilité de copier, imprimer ou d’exporter votre tableau sous format PDF, CSV ou Excel.
	  - il faut ajouter un id au table
	    
      Le réseau de distribution de contenu DataTables (CDN : Content Delivery Network) est un magasin permanent du logiciel publié dans le cadre du projet DataTables 
	  que vous pouvez utiliser sur votre site sans avoir à l'héberger vous-même.

	  Exemples :
	   https://www.datatables.net/examples/advanced_init/dt_events.html
	   https://www.nicolas-verhoye.com/mettez-de-la-vie-dans-vos-tableaux-avec-jquery-datatables.html 	 
  -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
  <script type="text/javascript">
			$(document).ready(function() {
				$('#Tableau').dataTable();
			} );
  </script>

<h3> Liste des offres </h3>
</br>
<form method="post">
	Mot de recherche: <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
</br> 
<div class="container p-3 my-3 bg-light">
	<!-- https://www.w3schools.com/bootstrap5/bootstrap_tables.php -->
	 
<table class="table table-light table-striped table-hover " id="Tableau"> 
<thead>
<tr class="table-dark">
	<th> id habitation </th>
	<th> adresse </th>
	<th> descriptif </th>
	<th> superficie </th>
	<th> type </th>
	<th> capacite</th>
	<th> surface </th>
	<th> balcon </th>
	<th> distance piste </th>
	<th> exposition </th>
	<th> cave </th>
	<th> local ski </th>
	<?php 	if (isset($_SESSION['email']) and $_SESSION['role']=="admin")
{
echo	"<th> Opérations </th>";
} ?>
</tr>
</thead>
<tbody>
<?php  

foreach ($lesHabitations as $uneHabitation){
	echo "<tr>";
	echo"
		<td>".$uneHabitation['idh']."</td>
		<td>".$uneHabitation['numero_h']." ".$uneHabitation['rue_h']." ".$uneHabitation['CP_h']." ".$uneHabitation['ville_h']."</td>
		<td>".$uneHabitation['nom_immeuble_h']."</td>
		<td>".$uneHabitation['superficie_h']."</td>
		<td>".$uneHabitation['type_h']."</td>
		<td>".$uneHabitation['capacite_acceuil_h']."</td>
		<td>".$uneHabitation['surface_habitable_h']."</td>
		<td>".$uneHabitation['surface_balcon_h']."</td>
		<td>".$uneHabitation['distance_piste_h']."</td>
		<td>".$uneHabitation['exposition_h']."</td>
		<td>".$uneHabitation['cave_h']."</td>
		<td>".$uneHabitation['local_a_ski_h']."</td>
		";
	if (isset($_SESSION['email']) and $_SESSION['role']=="admin")
{
	echo "
	<td>
	<a href='index.php?page=2&action=sup&idh=".$uneHabitation['idh']."'><img src='images/sup.png' height='30' width='30'><a/>
	<a href='index.php?page=2&action=edit&idh=".$uneHabitation['idh']."'><img src='images/edit.jpg' height='30' width='30'><a/>
	</td>
	";
	echo "<tr>";
	}
}
?> 
 </tbody>
</table>
</div>