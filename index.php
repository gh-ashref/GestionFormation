<?php session_start();

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
          <li><a href="#"><i class="fa falist fa-user"></i>Apprenant</a></li>
          <li><a href="#"><i class="fa falist fa-book"></i>Formation</a></li>
          <li><a href="#"><i class="fa falist fa-graduation-cap"></i>Formateur</a></li>
          <li><a href="#"><i class="fa falist fa-group"></i>Groupe</a></li>
        </ul>
    </li>

    

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png" alt="img"><b> Walid Ghribi</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
        
          <li><a href="#"><i class="fa falist fa-power-off"></i> Quitter</a></li>
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
  <li class="sidetitle">MAIN</li>
  <li><a href="index.html"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span class="label label-default">2</span></a></li>
  <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>Mailbox<span class="label label-default">19</span></a></li>
  <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>UI Elements<span class="caret"></span></a>
    <ul>
      <li><a href="icons.html">Icons</a></li>
      <li><a href="tabs.html">Tabs</a></li>
      <li><a href="buttons.html">Buttons</a></li>
      <li><a href="panels.html">Panels</a></li>
      <li><a href="notifications.html">Notifications</a></li>
      <li><a href="modal-boxes.html">Modal Boxes</a></li>
      <li><a href="progress-bars.html">Progress Bars</a></li>
      <li><a href="others.html">Others<span class="label label-danger">NEW</span></a></li>
    </ul>
  </li>
  <li><a href="charts.html"><span class="icon color8"><i class="fa fa-bar-chart"></i></span>Charts</a></li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Tables<span class="caret"></span></a>
    <ul>
      <li><a href="basic-table.html">Basic Tables</a></li>
      <li><a href="data-table.html">Data Tables</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Forms<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.html">Form Elements</a></li>
      <li><a href="layouts.html">Form Layouts</a></li>
      <li><a href="text-editors.html">Text Editors</a></li>
    </ul>
  </li>
  <li><a href="widgets.html"><span class="icon color11"><i class="fa fa-diamond"></i></span>Widgets</a></li>
  <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>Calendar<span class="label label-danger">NEW</span></a></li>
  <li><a href="typography.html"><span class="icon color12"><i class="fa fa-font"></i></span>Typography</a></li>
  <li><a href="#"><span class="icon color14"><i class="fa fa-paper-plane-o"></i></span>Extra Pages<span class="caret"></span></a>
    <ul>
      <li><a href="social-profile.html">Social Profile</a></li>
      <li><a href="invoice.html">Invoice<span class="label label-danger">NEW</span></a></li>
      <li><a href="login.html">Login Page</a></li>
      <li><a href="register.html">Register</a></li>
      <li><a href="forgot-password.html">Forgot Password</a></li>
      <li><a href="lockscreen.html">Lockscreen</a></li>
      <li><a href="blank.html">Blank Page</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="404.html">404 Page</a></li>
      <li><a href="500.html">500 Page</a></li>
    </ul>
  </li>
</ul>

<ul class="sidebar-panel nav">
  <li class="sidetitle">MORE</li>
  <li><a href="grid.html"><span class="icon color15"><i class="fa fa-columns"></i></span>Grid System</a></li>
  <li><a href="maps.html"><span class="icon color7"><i class="fa fa-map-marker"></i></span>Maps</a></li>
  <li><a href="customizable.html"><span class="icon color10"><i class="fa fa-lightbulb-o"></i></span>Customizable</a></li>
  <li><a href="helper-classes.html"><span class="icon color8"><i class="fa fa-code"></i></span>Helper Classes</a></li>
  <li><a href="changelogs.html"><span class="icon color12"><i class="fa fa-file-text-o"></i></span>Changelogs</a></li>
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






</body>
</html>