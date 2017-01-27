<?php
include "modele/groupe.class.php";
include "modele/formation.class.php";
include "modele/formateur.class.php";
  
   $nom_formateur="";
	 $prenom_formateur="";
    $sexe_formateur="";
    $pseudo_formateur="";
    $pass_formateur="";
	 $date_naissance_formateur="";
	 $email_formateur="";
	 $ville_formateur="";
	 $specialite_formateur="";
//include "modele/formateur.class.php";
  $id_groupe="";
	 $frais_formation="";
	 $nombre_heure_formation="";
	  $date_debut_formation="";
	   $date_fin_formation="";
	    $id_formation="";
	     $id_formateur="";
	     $nom_groupe=""; 
	 $titre_formation="";
	 $description_formation="";

//recup des param externe
if(isset($_REQUEST['id_groupe']))
$id_groupe=$_REQUEST['id_groupe'];
if(isset($_REQUEST['nom_groupe']))
$nom_groupe=$_REQUEST['nom_groupe'];

if(isset($_REQUEST['frais_formation']))
$frais_formation=$_REQUEST['frais_formation'];

if(isset($_REQUEST['nombre_heure_formation']))
$nombre_heure_formation=$_REQUEST['nombre_heure_formation'];

if(isset($_REQUEST['date_debut_formation']))
$date_debut_formation=$_REQUEST['date_debut_formation'];

if(isset($_REQUEST['date_fin_formation']))
$date_fin_formation=$_REQUEST['date_fin_formation'];

if(isset($_REQUEST['id_formation']))
$id_formation=$_REQUEST['id_formation'];

if(isset($_REQUEST['id_formateur']))
$id_formateur=$_REQUEST['id_formateur'];




	 $formation=new formation($id_formation,$titre_formation,$description_formation);

$formateur=new formateur($id_formateur,$nom_formateur,$prenom_formateur,$sexe_formateur,$pseudo_formateur,$pass_formateur,$date_naissance_formateur,$email_formateur,$ville_formateur,$specialite_formateur);


$ch=new groupe($id_groupe,$frais_formation,$nombre_heure_formation, $date_debut_formation,$date_fin_formation,$id_formation, $id_formateur,$nom_groupe);

switch($action){

case "add1": $req=$formation->liste($cnx);$res1=$formateur->liste($cnx);
include "view/groupe/add.view.php";
break;

case "etat": 
$res=$ch->liste($cnx);
include "view/formation/etat.view.php";
break;


//etape2 : insertion
case "add": $ch->add($cnx);
break;
//etape1 : edit
case "edit1": $res=$ch->detail($cnx);$req=$formation->liste($cnx);$res1=$formateur->liste($cnx);$res=$ch->detail($cnx);

include "view/groupe/edit.view.php";
break;
//etape2 : edit
case "edit": $ch->edit($cnx);
break;
//delete voiture
case "delete": $ch->delete($cnx);
break;

case "liste": 
$res=$ch->liste2($cnx);
include "view/groupe/liste.view.php";
break;
//export excel
case "excel": $res=$ch->liste($cnx);

include "view/cheque/excel.view.php";
break;

case "excel1": $res=$ch->etat($cnx,$datedb,$datefin);

include "view/formation/excel.view.php";
break;

case "etat1": 
$res=$ch->etat($cnx,$datedb,$datefin);
include "view/formation/affetat.view.php";
break;





}
?>