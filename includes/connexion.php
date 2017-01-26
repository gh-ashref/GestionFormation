<?php
$hote='localhost';
$nom_bd='centre_formation';
$user='root';
$mot_de_passe='';

try {
	$cnx = new PDO('mysql:host='.$hote.';dbname='.$nom_bd, $user, $mot_de_passe);
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  
} catch ( PDOException $e ) {
  echo "Connection à MySQL impossible : ", $e->getMessage();
  exit(); //ou die();
}
?>