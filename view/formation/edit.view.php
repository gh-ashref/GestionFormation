
<div class="content">

  <!-- Start Page Header -->
   <div class="page-header">
    <h1 class="title">Edition du Formation</h1>
      <ol class="breadcrumb">
        <li class="active">Cette Outils Permet de Gerer les Formations</li>
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

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Editer Formateur 
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
			<form method="post" class="form-horizontal" action="index.php?controller=formation&action=edit&id_formation=<?php echo $res->id_formation;?>" enctype="multipart/form-data">
  <?php 

?>
                
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Titre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="titre_formation" value="<?php echo $res->titre_formation;?>">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="description_formation" value="<?php echo $res->description_formation;?>">
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
