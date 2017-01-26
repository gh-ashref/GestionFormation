<?php
$titre="LISTE DES apprenant";
$marque="";
$i=0;
foreach($res as $resultat){

$data[$i][0]=$resultat->id_apprenant;
$data[$i][1]=$resultat->nom_apprenant;
$data[$i][2]=$resultat->prenom_apprenant;
$data[$i][3]=$resultat->prenom_apprenant;
$i++;
}
$header = array('ID','Nom voiture', 'Marque', 'Couleur');
$w=array(20, 60, 50, 50);
?>