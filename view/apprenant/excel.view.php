<?php
$file="apprenant.xls";
$contenu="";
$contenu.= "<table border='1'>
<tr>
    <th>ID</th>
	<th>Nom Prenom Etudiant</th>
    <th>Date Naissance</th>
    <th>Ville</th>
    <th>Niveau</th>
    <th>Sexe</th>
</tr>";


foreach($res as $resultat){


$contenu.="
<tr>
	<td data-th=\"ID\" align=center>".$resultat->id_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->nom_apprenant."".$resultat->prenom_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->date_naissance_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->ville_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->niveau_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->sexe_apprenant."</td>
</tr>	
";


}


$contenu.="</table>";