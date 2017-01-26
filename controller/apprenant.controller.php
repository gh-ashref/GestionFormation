<?php
include "modele/apprenant.class.php";
  $id_apprenant="";
	 $nom_apprenant="";
	 $prenom_apprenant="";
    $sexe_apprenant="";
    $pseudo_apprenant="";
    $pass_apprenant="";
	 $date_naissance_apprenant="";
	 $email_apprenant="";
	 $ville_apprenant="";
	 $niveau_apprenant="";

//recup des param externe
if(isset($_REQUEST['id_apprenant']))
$id_apprenant=$_REQUEST['id_apprenant'];

if(isset($_REQUEST['nom_apprenant']))
$nom_apprenant=$_REQUEST['nom_apprenant'];

if(isset($_REQUEST['prenom_apprenant']))
$prenom_apprenant=$_REQUEST['prenom_apprenant'];

if(isset($_REQUEST['sexe_apprenant']))
$sexe_apprenant=$_REQUEST['sexe_apprenant'];


if(isset($_REQUEST['pseudo_apprenant']))
$pseudo_apprenant=$_REQUEST['pseudo_apprenant'];



if(isset($_REQUEST['pass_apprenant']))
$pass_apprenant=$_REQUEST['pass_apprenant'];

if(isset($_REQUEST['date_naissance_apprenant']))
$date_naissance_apprenant=$_REQUEST['date_naissance_apprenant'];

if(isset($_REQUEST['email_apprenant']))
$email_apprenant=$_REQUEST['email_apprenant'];

if(isset($_REQUEST['ville_apprenant']))
$ville_apprenant=$_REQUEST['ville_apprenant'];

if(isset($_REQUEST['niveau_apprenant']))
$niveau_apprenant=$_REQUEST['niveau_apprenant'];



//instanciation de la classe voiture
$ch=new apprenant($id_apprenant,$nom_apprenant,$prenom_apprenant,$sexe_apprenant,$pseudo_apprenant,$pass_apprenant,$date_naissance_apprenant,$email_apprenant,$ville_apprenant,$niveau_apprenant);
switch($action){

case "add1": 
include "view/apprenant/add.view.php";
break;

case "etat": 
$res=$ch->liste($cnx);
include "view/apprenant/pdf.view.php";
break;


//etape2 : insertion
case "add": $ch->add($cnx);
break;
//etape1 : edit
case "edit1": $res=$ch->detail($cnx);

include "view/apprenant/edit.view.php";
break;
//etape2 : edit
case "edit": $ch->edit($cnx);
include "view/apprenant/liste.view.php";
break;
//delete voiture
case "delete": $ch->delete($cnx);
break;

case "liste": 
$res=$ch->liste($cnx);
include "view/apprenant/liste.view.php";
break;

//export excel
case "excel": 
$res=$ch->liste($cnx);
include "view/apprenant/excel.view.php";
break;









}
?>