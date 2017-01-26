<?php
include "modele/formation.class.php";
  $id_formation="";
	 $titre_formation="";
	 $description_formation="";

//recup des param externe
if(isset($_REQUEST['id_formation']))
$id_formation=$_REQUEST['id_formation'];

if(isset($_REQUEST['titre_formation']))
$titre_formation=$_REQUEST['titre_formation'];

if(isset($_REQUEST['description_formation']))
$description_formation=$_REQUEST['description_formation'];




//instanciation de la classe voiture
$ch=new formation($id_formation,$titre_formation,$description_formation);
switch($action){

case "add1": 
include "view/formation/add.view.php";
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