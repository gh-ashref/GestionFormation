<?php
$titre="LISTE DES Groupes";
$marque="";
$i=0;
foreach($res as $resultat){

$data[$i][0]=$resultat->id_apprenant;
$data[$i][1]=$resultat->nom_groupe;
$data[$i][2]=$resultat->nombre_heure_formation;
$data[$i][3]=$resultat->date_debut_formation;
$i++;
}
$header = array('id','nom', 'nombre_heure', 'date_debut');
$w=array(20, 60, 50, 50);
?>