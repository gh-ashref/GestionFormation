<?php
$file="formateur.xls";
$contenu="";
$contenu.= "<table border='1'>
<tr>
    <th>ID</th>
	<th>Nom Prenom Formateur</th>
    <th>Date Naissance</th>
    <th>Ville</th>
    <th>specialite</th>
    <th>Sexe</th>
</tr>";


foreach($res as $resultat){


$contenu.="
<tr>
	<td data-th=\"ID\" align=center>".$resultat->id_formateur."</td>
	<td data-th=\"ID\" align=center>".$resultat->nom_formateur."".$resultat->prenom_formateur."</td>
	<td data-th=\"ID\" align=center>".$resultat->date_naissance_formateur."</td>
	<td data-th=\"ID\" align=center>".$resultat->ville_formateur."</td>
	<td data-th=\"ID\" align=center>".$resultat->specialite_formateur."</td>
	<td data-th=\"ID\" align=center>".$resultat->sexe_formateur."</td>
</tr>	
";


}


$contenu.="</table>";