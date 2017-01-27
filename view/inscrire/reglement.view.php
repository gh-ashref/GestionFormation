
<div class="content">

  <!-- Start Page Header -->
 <div class="page-header">
    <h1 class="title">Ajouter des Groupe</h1>
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
      <img src="img/example-logo.png" alt="logo"><br>
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
        <h2>Jonathan Doe</h2>
      </div>
      <div class="col-md-6 col-xs-6 padding-0 text-right">
        <h4>PROJECT</h4>
        <h2>Personal</h2>
      </div>
    </div>

    <table class="table">
      <thead class="title">
        <tr>
          <td>TASK DESCRIPTION</td>
          <td>HOURS</td>
          <td>RATE PER HOUR</td>
          <td class="text-right">TOTAL</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ipad Application Design <p>Designed an app learning colors<br>for children</p></td>
          <td>20</td>
          <td>$ 90,00</td>
          <td class="text-right">$ 1.800,00</td>
        </tr>
        <tr>
          <td>Logo Design <p>Designed a logo for happy company</td>
          <td>10</td>
          <td>$ 50,00</td>
          <td class="text-right">$ 500,00</td>
        </tr>
        <tr>
          <td>iOS Application <p>Designed an iOs app for iPhone</td>
          <td>40</td>
          <td>$ 50,00</td>
          <td class="text-right">$ 2.000,00</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="text-right"></td>
          <td class="text-right">TOTAL<h4 class="total">$ 4.300,00</h4></td>
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
