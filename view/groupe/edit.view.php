
<div class="content">

  <!-- Start Page Header -->
 <div class="page-header">
    <h1 class="title">Editer des Groupe</h1>
      <ol class="breadcrumb">
        <li class="active">Cette Outils Permet de Gerer les Formations</li>
    </ol>
    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.php" class="btn btn-light">Accueil</a>
        
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

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Ajout Formation 
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
			<form method="post" class="form-horizontal" action="index.php?controller=groupe&action=add" enctype="multipart/form-data">
<div class="form-group">
                  <label class="col-sm-2 control-label form-label">formation</label>
                  <div class="col-sm-10">
                    <select class="selectpicker"  name="id_formation">
                      <?php
  foreach($req as $resultat){ ?>
    <option value="<?php echo $resultat->id_formation;?>"><?php echo $resultat->titre_formation;?></option>
    <?php } ?>
              
                        
                      </select>                  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Formateur</label>
                  <div class="col-sm-10">
                    <select class="selectpicker"  name="id_formateur">
                      <?php
  foreach($res1 as $resultat){ ?>
    <option value="<?php echo $resultat->id_formateur;?>"><?php echo $resultat->nom_formateur;?></option>
    <?php } ?>
              
                        
                      </select>                  
                  </div>
                </div>
<div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">nom groupe</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control form-control-radius" id="input2" name="nom_groupe" value="<?php echo $res->nom_groupe;?>">
                  </div>
                </div>
				
                 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Frais Formation</label>
                  <div class="col-sm-10">
                    <input type="number" step="0.1" class="form-control form-control-radius" id="input2" name="frais_formation" value="<?php echo $res->frais_formation;?>">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Nombre d'heure</label>
                  <div class="col-sm-10">
                    <input type="number" step="0.1" class="form-control form-control-radius" id="input2" name="nombre_heure_formation" value="<?php echo $res->nombre_heure_formation;?>">
                  </div>
                </div>
				
         <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Date debut</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control form-control-radius" id="input2" name="date_debut_formation" value="<?php echo $res->date_debut_formation;?>">
                  </div>
                </div>

         <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Date fin </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control form-control-radius" id="input2" name="date_fin_formation" value="<?php echo $res->date_fin_formation;?>">
                  </div>
                </div>      
                <center>
            <button type="submit" class="btn btn-default btn-lg">Valider</button>
			</center>

              </form> 

            </div>

      </div>
    </div>

  </div>
  
   



  <!-- End Second Row -->





</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 



</div>
