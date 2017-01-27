
<div class="content">

  <!-- Start Page Header -->
 <div class="page-header">
    <h1 class="title">Reglement</h1>
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

   <div class="invoice row">
    <div class="invoicename">Reglement</div>
    <div class="logo">
      <img src="img/logo.png" alt="logo"><br>
      <b>Bienvenu chez notre centre du formation</b><br>
      Centre du formation Sfax<br>
      Route mahdia sfax 3000
    </div>

    <div class="line row">
      <div class="col-md-6 col-xs-6 padding-0 text-left">
        <h4>Date</h4>
        <h2><?php $now = new DateTime(); echo $now->format('Y-m-d'); ?></h2>
      </div>
      <div class="col-md-6 col-xs-6 padding-0 text-right">
        <h4>N°</h4>
        <h2>3</h2>
      </div>
    </div>

    <div class="line row">
      <div class="col-md-6 col-xs-6 padding-0 text-left">
	 
        <h4>Nom et Prenom</h4>
		
        <h2><?php echo $res[0]->nom_apprenant;?> <?php echo $res[0]->prenom_apprenant;?></h2>
	
      </div>
      <div class="col-md-6 col-xs-6 padding-0 text-right">
        <h4>PROJECT</h4>
        <h2>Personal</h2>
      </div>
    </div>

    <table class="table">
      <thead class="title">
        <tr>
          <td>Formation</td>
          <td>Nombre d'heure</td>
          <td>Prix</td>
          <td class="text-right">TOTAL</td>
        </tr>
      </thead>
      <tbody>
	<?php $tot=0; foreach($res as $tab){?>
        <tr>
          <td><?php echo $tab->titre_formation;?> <p><?php echo $tab->description_formation;?></p></td>
          <td><?php echo $tab->nombre_heure_formation;?></td>
          <td><?php echo $tab->prix;?></td>
          <td class="text-right"> <?php $a=(int)$tab->prix-(($tab->prix*$tab->remise)/100); echo $a; $tot=$a+$tot?></td>
        </tr>
	<?php }?>
       
        <tr>
          <td></td>
          <td></td>
          <td class="text-right"></td>
          <td class="text-right">TOTAL<h4 class="total"><?php echo $tot;?></h4></td>
        </tr>
      </tbody>
    </table>

    <div class="signature">
      <p><img src="img/signature.png" alt="img"></p>
      <p><b>Walid Ghribi</b></p>
    </div>

   <form>
  <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
</form>


  </div>
  <!-- End Invoice -->



</div>
<!-- END CONTAINER -->
 

</div>

  </div>
  
   



  <!-- End Second Row -->





</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 



</div>
