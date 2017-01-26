
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Accueil</a>
        <a href="#" class="btn btn-light"><i class="fa fa-file-pdf-o"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-file-excel-o"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-widget">

 


 


  <!-- Start Second Row -->



  <div class="row">

     <!-- Start Panel -->
    <div class="col-md-12">
     
	  <table class="table">
            <thead>
              <tr>
              
                <td>Nom et Prenom</td>
                <td>Mail</td>
                <td>Date Naissance</td>
                <td>Ville</td>
                <td>Niveau</td>
				 <td>Menu</td>
              </tr>
            </thead>
            <tbody>
			<?php 

foreach($res as $tab){
	if ($tab->sexe_apprenant=="Femme")
		echo"<tr class='danger'>";
	else echo"<tr class='succes'>";
	echo "

                <td>".$tab->nom_apprenant." ".$tab->prenom_apprenant."</td>
                <td >".$tab->email_apprenant."</td>
                <td>".$tab->date_naissance_apprenant."</td>
                <td>".$tab->ville_apprenant."</td>
                <td>".$tab->niveau_apprenant."</td>
                <td>Delete</td>
              </tr>
";}
			 ?>
            </tbody>
          </table>

	 </div>
    <!-- End Panel -->

  </div>
  
   



  <!-- End Second Row -->





</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 



</div>
