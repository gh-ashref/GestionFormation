<?php session_start();

include 'includes/connexion.php';
include "modele/fonctions.class.php";
$fn=new functions();

if(isset($_REQUEST['controller']))
$controller=$_REQUEST['controller'];

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

include "controller/".$controller.".controller.php"; 

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");
echo $contenu;
?>
