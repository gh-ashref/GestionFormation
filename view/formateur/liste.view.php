
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Liste Des  Formateurs</h1>
      <ol class="breadcrumb">
        <li class="active">Cette Outils Permet de Gerer les Formations</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Accueil</a>
         <a href="index_pdf.php?controller=formateur&action=etat"" class="btn btn-light"><i class="fa fa-file-pdf-o"></i></a>
        <a href="index_excel.php?controller=formateur&action=excel" class="btn btn-light"><i class="fa fa-file-excel-o"></i></a>
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
                <td>Specialité</td>
				 <td>Menu</td>
              </tr>
            </thead>
            <tbody>
			<?php 

foreach($res as $tab){
	if ($tab->sexe_formateur=="Femme")
		echo"<tr class='danger'>";
	else echo"<tr class='succes'>";
	echo "

                <td>".$tab->nom_formateur." ".$tab->prenom_formateur."</td>
                <td >".$tab->email_formateur."</td>
                <td>".$tab->date_naissance_formateur."</td>
                <td>".$tab->ville_formateur."</td>
                <td>".$tab->specialite_formateur."</td>
                <td><a href=\"index.php?controller=formateur&action=delete&id_formateur=".$tab->id_formateur."\" onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><i class='fa fa-remove' ></i></a>  <a href=index.php?controller=formateur&action=edit1&id_formateur=".$tab->id_formateur."><i class='fa fa-edit' ></i></a></td>
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
