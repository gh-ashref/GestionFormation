<?php session_start();
include "includes/secure.php";
include 'includes/connexion.php';
include "modele/fonctions.class.php";


$fn=new functions();
$controller="apprenant";
$action="add1";

if(isset($_REQUEST['controller']))
$controller=$_REQUEST['controller'];

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

?>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <title>Gestion Formation</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo">G.Formation</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

  

  

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">Créer un nouveau <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list">
          <li><a href="index.php?controller=apprenant&action=add1"><i class="fa falist fa-user"></i>Apprenant</a></li>
          <li><a href="index.php?controller=formation&action=add1"><i class="fa falist fa-book"></i>Formation</a></li>
          <li><a href="index.php?controller=formateur&action=add1"><i class="fa falist fa-graduation-cap"></i>Formateur</a></li>
          <li><a href="index.php?controller=groupe&action=add1"><i class="fa falist fa-group"></i>Groupe</a></li>
        </ul>
    </li>

    

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png" alt="img"><b> Walid Ghribi</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
        
          <li><a href="index.php?controller=admin&action=logout"><i class="fa falist fa-power-off"></i> Quitter</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MENU</li>
 
   <li><a href="#"><span class="icon color9"><i class="fa fa-male"></i></span>Apprenant<span class="caret"></span></a>
    <ul>
      <li><a href="index.php?controller=apprenant&action=add1">Ajout Apprenant</a></li>
      <li><a href="index.php?controller=apprenant&action=liste">Gestion Apprenant</a></li>
    </ul>
  </li>
  
   <li><a href="#"><span class="icon color9"><i class="fa fa-user-md"></i></span>Formateur<span class="caret"></span></a>
    <ul>
      <li><a href="index.php?controller=formateur&action=add1">Ajout Formateur</a></li>
      <li><a href="index.php?controller=formateur&action=liste">Gestion Formateur</a></li>
    </ul>
  </li>
  
   <li><a href="#"><span class="icon color9"><i class="fa fa-book"></i></span>Formation<span class="caret"></span></a>
    <ul>
      <li><a href="index.php?controller=formation&action=add1">Ajout Formation</a></li>
      <li><a href="index.php?controller=formation&action=liste">Gestion Formation</a></li>
    </ul>
  </li>
  
   <li><a href="#"><span class="icon color9"><i class="fa fa-group"></i></span>Groupe<span class="caret"></span></a>
    <ul>
      <li><a href="index.php?controller=groupe&action=add1">Ajout Groupe</a></li>
      <li><a href="index.php?controller=groupe&action=liste">Gestion Groupe</a></li>
    </ul>
  </li>
  
   <li><a href="#"><span class="icon color9"><i class="fa fa-edit"></i></span>Incription<span class="caret"></span></a>
    <ul>
      <li><a href="index.php?controller=inscrire&action=add1">Affecter Apprenant</a></li>
      <li><a href="index.php?controller=inscrire&action=rech">Liste inscription</a></li>
    </ul>
  </li>
  
  
</ul>



</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT --><?php include "controller/".$controller.".controller.php"; ?><!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="js/summernote/summernote.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/chartist/chartist.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="js/kode-alert/main.js"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file -->
<script src="js/gmaps/gmaps.js"></script>
<!-- demo codes -->
<script src="js/gmaps/gmaps-plugin.js"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>




<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>


</body>
</html>