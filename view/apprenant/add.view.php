
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

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Ajout Apprenant
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
			<form method="post" class="form-horizontal" action="index.php?controller=apprenant&action=add" enctype="multipart/form-data">


                 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="nom_apprenant">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Prenom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="prenom_apprenant">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label form-label">Sexe</label>
                  <div class="col-sm-10">
                    <select class="selectpicker"  name="sexe_apprenant">
					    <option data-icon="fa fa-child">Homme</option>
                        <option data-icon="fa fa-female">Femme</option>
                        
                      </select>                  
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label" >Date Naissance</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control form-control-radius" id="input2" name="date_naissance_apprenant">
                  </div>
                </div>
				
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Pseudo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="pseudo_apprenant">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Mot de passe</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control form-control-radius" id="input2"  name="pass_apprenant">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Mail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="email_apprenant">
                  </div>
                </div>
				
				 <div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Ville</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="ville_apprenant">
                  </div>
                </div>

				<div class="form-group">
                  <label for="input2" class="col-sm-2 control-label form-label">Niveau</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-radius" id="input2" name="niveau_apprenant">
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
