<?php
$file="Inscription.xls";
$contenu="";
$contenu.= "<table border='1'>
<tr>
    <th>ID</th>
	<th>Nom Groupe</th>
    <th>nombre_heure_formation</th>
    <th>date_debut_formation</th>
    <th>date_fin_formation</th>
    <th>nom_formateur</th>
</tr>";


foreach($res as $resultat){


$contenu.="
<tr>
	<td data-th=\"ID\" align=center>".$resultat->id_apprenant."</td>
	<td data-th=\"ID\" align=center>".$resultat->nom_groupe."</td>
	<td data-th=\"ID\" align=center>".$resultat->nombre_heure_formation."</td>
	<td data-th=\"ID\" align=center>".$resultat->date_debut_formation."</td>
	<td data-th=\"ID\" align=center>".$resultat->date_fin_formation."</td>
	<td data-th=\"ID\" align=center>".$resultat->nom_formateur."</td>
</tr>	
";


}


$contenu.="</table>";