<?php
include "modele/groupe.class.php";
include "modele/apprenant.class.php";
include "modele/inscrire.class.php";
 
	 $nom_apprenant="";
	 $prenom_apprenant="";
    $sexe_apprenant="";
    $pseudo_apprenant="";
    $pass_apprenant="";
	 $date_naissance_apprenant="";
	 $email_apprenant="";
	 $ville_apprenant="";
	 $niveau_apprenant="";
//include "modele/formateur.class.php";
 
	 $frais_formation="";
	 $nombre_heure_formation="";
	  $date_debut_formation="";
	   $date_fin_formation="";
	    $id_formation="";
	     $id_formateur="";
	      
	       $id_incrit="";
	 $prix="";
	 $remise="";
     $id_groupe="";
      $id_apprenant="";

//recup des param externe
if(isset($_REQUEST['id_groupe']))
$id_groupe=$_REQUEST['id_groupe'];

if(isset($_REQUEST['id_incrit']))
$id_incrit=$_REQUEST['id_incrit'];

if(isset($_REQUEST['prix']))
$prix=$_REQUEST['prix'];

if(isset($_REQUEST['remise']))
$remise=$_REQUEST['remise'];

if(isset($_REQUEST['id_apprenant']))
$id_apprenant=$_REQUEST['id_apprenant'];




	$apprenant=new apprenant($id_apprenant,$nom_apprenant,$prenom_apprenant,$sexe_apprenant,$pseudo_apprenant,$pass_apprenant,$date_naissance_apprenant,$email_apprenant,$ville_apprenant,$niveau_apprenant);


$groupe=new groupe($id_groupe,$frais_formation,$nombre_heure_formation, $date_debut_formation,$date_fin_formation,$id_formation, $id_formateur);

$ch=new inscrire($id_incrit,$prix,$remise,$id_apprenant,$id_groupe);

switch($action){

case "add1": $req=$apprenant->liste($cnx);$res1=$groupe->liste($cnx);
include "view/inscrire/add.view.php";
break;

case "etat": 
$res=$ch->liste($cnx);
include "view/formation/etat.view.php";
break;


//etape2 : insertion
case "add": $ch->add($cnx);
break;
//etape1 : edit
case "edit1": $res=$ch->detail($cnx);

include "view/formation/edit.view.php";
break;
//etape2 : edit
case "edit": $ch->edit($cnx);
break;
//delete voiture
case "delete": $ch->delete($cnx);
break;

case "liste": 
$res=$ch->liste($cnx);
include "view/formation/liste.view.php";
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