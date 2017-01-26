<?php
$titre="LISTE DES FORMATEURS";
$marque="";
$i=0;
foreach($res as $resultat){

$data[$i][0]=$resultat->id_formateur;
$data[$i][1]=$resultat->nom_formateur." ".$resultat->prenom_formateur;
$data[$i][2]=$resultat->date_naissance_formateur;
$data[$i][3]=$resultat->ville_formateur;
$i++;
}
$header = array('ID','Nom et Prenom', 'date_naissance', 'ville');
$w=array(20, 60, 50, 50);
?>