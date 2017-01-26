<?php
include "modele/admin.class.php";
//initialisation des params voiture
$login="";
$pass="";

//recup des param externe
if(isset($_REQUEST['login']))
$login=$_REQUEST['login'];

if(isset($_REQUEST['pass']))
$pass=$_REQUEST['pass'];

//instanciation de la classe voiture
$adm=new admin($login,$pass);

switch($action){
//formulaire d'authentification
case "login1": include "view/admin/login.view.php";
break;
//exec authent
case "login": $adm->login($cnx);
break;
//deconnexion
case "logout": $adm->logout();
break;

}
?>
