<?php
include "modele/formateur.class.php";
  $id_formateur="";
	 $nom_formateur="";
	 $prenom_formateur="";
    $sexe_formateur="";
    $pseudo_formateur="";
    $pass_formateur="";
	 $date_naissance_formateur="";
	 $email_formateur="";
	 $ville_formateur="";
	 $specialite_formateur="";

//recup des param externe
if(isset($_REQUEST['id_formateur']))
$id_formateur=$_REQUEST['id_formateur'];

if(isset($_REQUEST['nom_formateur']))
$nom_formateur=$_REQUEST['nom_formateur'];

if(isset($_REQUEST['prenom_formateur']))
$prenom_formateur=$_REQUEST['prenom_formateur'];

if(isset($_REQUEST['sexe_formateur']))
$sexe_formateur=$_REQUEST['sexe_formateur'];


if(isset($_REQUEST['pseudo_formateur']))
$pseudo_formateur=$_REQUEST['pseudo_formateur'];



if(isset($_REQUEST['pass_formateur']))
$pass_formateur=$_REQUEST['pass_formateur'];

if(isset($_REQUEST['date_naissance_formateur']))
$date_naissance_formateur=$_REQUEST['date_naissance_formateur'];

if(isset($_REQUEST['email_formateur']))
$email_formateur=$_REQUEST['email_formateur'];

if(isset($_REQUEST['ville_formateur']))
$ville_formateur=$_REQUEST['ville_formateur'];

if(isset($_REQUEST['specialite_formateur']))
$specialite_formateur=$_REQUEST['specialite_formateur'];



//instanciation de la classe voiture
$ch=new formateur($id_formateur,$nom_formateur,$prenom_formateur,$sexe_formateur,$pseudo_formateur,$pass_formateur,$date_naissance_formateur,$email_formateur,$ville_formateur,$specialite_formateur);
switch($action){

case "add1": 
include "view/formateur/add.view.php";
break;

case "etat": 
$res=$ch->liste($cnx);
include "view/formateur/etat.view.php";
break;


//etape2 : insertion
case "add": $ch->add($cnx);
break;
//etape1 : edit
case "edit1": $res=$ch->detail($cnx);

include "view/formateur/edit.view.php";
break;
//etape2 : edit
case "edit": $ch->edit($cnx);
break;
//delete voiture
case "delete": $ch->delete($cnx);
break;

case "liste": 
$res=$ch->liste($cnx);
include "view/formateur/liste.view.php";
break;
//export excel
case "excel": $res=$ch->liste($cnx);

include "view/cheque/excel.view.php";
break;

case "excel1": $res=$ch->etat($cnx,$datedb,$datefin);

include "view/formateur/excel.view.php";
break;

case "etat1": 
$res=$ch->etat($cnx,$datedb,$datefin);
include "view/formateur/affetat.view.php";
break;





}
?>