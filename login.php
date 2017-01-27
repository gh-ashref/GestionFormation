<?php session_start();
session_destroy();
session_start();
include 'includes/connexion.php';
include "modele/fonctions.class.php";

$controller="admin";
$action="login1";

if(isset($_REQUEST['controller']))
$controller=$_REQUEST['controller'];

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="menu">
</div>
<div id="contenu">
<?php include "controller/".$controller.".controller.php"; ?>
</div>

</body>
</html>