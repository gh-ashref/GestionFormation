
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
	  <?php echo "
        <a href='index.html' class='btn btn-light'>Accueil</a>
        <a href='index_pdf.php?controller=inscrire&action=etat&dated=".$dated."&datef=".$datef."' class='btn btn-light'><i class='fa fa-file-pdf-o'></i></a>
        <a href='index_excel.php?controller=inscrire&action=excel&dated=".$dated."&datef=".$datef."' class='btn btn-light'><i class='fa fa-file-excel-o'></i></a>
		"?>
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
              
                <td>nom Groupe</td>
                <td>frais formation formation</td>
                <td>nombre heure formation</td>
               
				 <td>date debut formation</td>
				 <td>date fin formation</td>
				 <td>nom formateur</td>
				 <td width="100px">Menu</td>
              </tr>
            </thead>
            <tbody>
			<?php 

foreach($res as $tab){
	
		
	 echo"<tr class='succes'>";
	echo "

	
                <td>".$tab->nom_groupe."</td>
                <td>".$tab->frais_formation."</td>
                <td >".$tab->nombre_heure_formation."</td>
                <td >".$tab->date_debut_formation."</td>
                <td >".$tab->date_fin_formation."</td>
                <td >".$tab->nom_formateur."</td>
                
                <td><a href=\"index.php?controller=groupe&action=delete&id_groupe=".$tab->id_groupe."\" onclick=\"if(confirm('etes vous sure de supprimer?')) return true; else return false; \"><i class='fa fa-remove' ></i></a>  <a href=index.php?controller=groupe&action=edit1&id_groupe=".$tab->id_groupe."><i class='fa fa-edit' ></i></a></i></a>  <a href=index.php?controller=inscrire&action=listeetud&id_groupe=".$tab->id_groupe."><i class='fa fa-list-ul' ></i></a></td>
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
