
<div class="content">

  <!-- Start Page Header -->
<div class="page-header">
    <h1 class="title">Liste des Inscription</h1>
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
          Selection intervale du date
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
			<form method="post" class="form-horizontal" action="index.php?controller=inscrire&action=listefiltre" enctype="multipart/form-data">

               

                 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Date Debut</label>
                  <div class="col-sm-10">
                    <input type="date" step="0.1" class="form-control form-control-radius" id="input2" name="dated">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Date Fin</label>
                  <div class="col-sm-10">
                    <input type="date" step="0.1" class="form-control form-control-radius" id="input2" name="datef">
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
