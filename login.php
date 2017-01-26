<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Gestion Formation</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="index.php?controller=admin&action=login" method="post" enctype="multipart/form-data">
        <div class="top">
          <img src="img/Bdc68ERT9.png" alt="icon" class="icon">
          <h1>Gestion Formation</h1>
          <h4>Outils pour Gestion des Formation</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Pseudo" name="login">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Mot de passe" name="pass">
            <i class="fa fa-key"></i>
          </div>
          
          <button type="submit" class="btn btn-default btn-block">Entrer</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Enregistrer </a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>