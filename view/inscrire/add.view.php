
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Insertion des Inscriptions</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
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
          Ajout incrit 
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
			<form method="post" class="form-horizontal" action="index.php?controller=inscrire&action=add" enctype="multipart/form-data">
<div class="form-group">
                  <label class="col-sm-2 control-label form-label">apprenant</label>
                  <div class="col-sm-10">
                    <select class="selectpicker"  name="id_apprenant">
                      <?php
  foreach($req as $resultat){ ?>
    <option value="<?php echo $resultat->id_apprenant;?>"><?php echo $resultat->nom_apprenant;?></option>
    <?php } ?>
              
                        
                      </select>                  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Groupe</label>
                  <div class="col-sm-10">
                    <select class="selectpicker"  name="id_groupe">
                      <?php
  foreach($res1 as $resultat){ ?>
    <option value="<?php echo $resultat->id_groupe;?>"><?php echo $resultat->nom_groupe;?></option>
    <?php } ?>
              
                        
                      </select>                  
                  </div>
                </div>

                 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">prix</label>
                  <div class="col-sm-10">
                    <input type="number" step="0.1" class="form-control form-control-radius" id="input2" name="prix">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">remise</label>
                  <div class="col-sm-10">
                    <input type="number" step="0.1" class="form-control form-control-radius" id="input2" name="remise">
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
