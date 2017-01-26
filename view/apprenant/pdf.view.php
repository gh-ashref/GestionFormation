<?php
$titre="LISTE DES APPRENANTS";
$marque="";
$i=0;
foreach($res as $resultat){

$data[$i][0]=$resultat->id_apprenant;
$data[$i][1]=$resultat->nom_apprenant." ".$resultat->prenom_apprenant;
$data[$i][2]=$resultat->date_naissance_apprenant;
$data[$i][3]=$resultat->ville_apprenant;
$i++;
}
$header = array('ID','Nom et Prenom', 'date_naissance', 'ville');
$w=array(20, 60, 50, 50);
?>