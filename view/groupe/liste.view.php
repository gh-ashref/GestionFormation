
<div class="content">

  <!-- Start Page Header -->
   <div class="page-header">
    <h1 class="title">Liste des Groupes</h1>
      <ol class="breadcrumb">
        <li class="active">Cette Outils Permet de Gerer les Formations</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Accueil</a>
        <a href="#" class="btn btn-light"><i class="fa fa-file-pdf-o"></i></a>
        <a href="index_excel.php?controller=apprenant&action=excel" class="btn btn-light"><i class="fa fa-file-excel-o"></i></a>
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
              
                <td>frais_formation formation</td>
                <td>nombre_heure_formation</td>
               
				 <td>date_debut_formation</td>
				 <td>date_fin_formation</td>
				 <td>nom formateur</td>
				 <td>Menu</td>
              </tr>
            </thead>
            <tbody>
			<?php 

foreach($res as $tab){
	
		
	 echo"<tr class='succes'>";
	echo "

                <td>".$tab->frais_formation."</td>
                <td >".$tab->nombre_heure_formation."</td>
                <td >".$tab->date_debut_formation."</td>
                <td >".$tab->date_fin_formation."</td>
                <td >".$tab->nom_formateur."</td>
                
                <td><a href=\"index.php?controller=groupe&action=delete&id_groupe=".$tab->id_groupe."\" onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><i class='fa fa-remove' ></i></a>  <a href=index.php?controller=groupe&action=edit1&id_groupe=".$tab->id_groupe."><i class='fa fa-edit' ></i></a></td>
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
