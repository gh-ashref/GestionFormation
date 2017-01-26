<?php session_start();
include "includes/secure.php";
include 'includes/connexion.php';
include "modele/fonctions.class.php";
$fn=new functions();

include "modele/pdf.php";
$pdf = new PDF();
if(isset($_REQUEST['controller']))
$controller=$_REQUEST['controller'];

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

include "controller/".$controller.".controller.php"; 

// Chargement des données
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);

$pdf->FancyTable($header,$data,$w);
$pdf->Output();

?>
