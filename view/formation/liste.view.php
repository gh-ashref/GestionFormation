
<div class="content">

  <!-- Start Page Header -->
   <div class="page-header">
    <h1 class="title">Liste des Apprenants</h1>
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
              
                <td>titre formation</td>
                <td>description</td>
               
				 <td>Menu</td>
              </tr>
            </thead>
            <tbody>
			<?php 

foreach($res as $tab){
	
		
	 echo"<tr class='succes'>";
	echo "

                <td>".$tab->titre_formation."</td>
                <td >".$tab->description_formation."</td>
                
                <td><a href=\"index.php?controller=formation&action=delete&id_formation=".$tab->id_formation."\" onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><i class='fa fa-remove' ></i></a>  <a href=index.php?controller=formation&action=edit1&id_formation=".$tab->id_formation."><i class='fa fa-edit' ></i></a></td>
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
