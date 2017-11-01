<?php
  Auth = new AuthController;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Memoire Editor</title>

    <link href="../Assets/styles/styles.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
    <link href="https://v4-alpha.getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Text editor ../Assets -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.7.1/spectrum.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/css/perfect-scrollbar.min.css'>
    <link rel="stylesheet" href="../Assets/styles/text-editor/style.css">
</head>

<body class="body-class">
  <!-- NAVBAR -->
  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Memoire Editor</a>
    <div class="collapse navbar-collapse navbar-alignitems" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item nav-item-li">
                <a class="nav-link" href="?p=home">Accueil</a>
            </li>
            <li class="nav-item nav-item-li">
                <a class="nav-link" href="?p=edit">Edition</a>
            </li>
        </ul>
        <li class="nav-item navbar-alignitems">
          <form method=\"POST\" action=\"?p=admin-deconnect\" class=\"edit-form form-inline my-2 my-lg-0 navbar-text\">
            <ul class="navbar-nav mr-auto navbar-alignitems">
              <li class="nav-item nav-item-li" style="color: white;"></li>
              <li class="nav-item nav-item-li">
                <button style='margin-left: 10px' class='btn btn-danger' name='connect-button' type='submit' value='connect'>Deconnecter</button>
              </li>
            <ul>
          </form>
        </li>
    </div>
  </nav>
  <!-- FIN NAVBAR -->
<div class="container-fluid">
    <div class="row">
      <!-- ASIDE TRI -->
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar sidebar-main">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <p class="text-center title-aside">Trier par</p>
                </li>
            </ul>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">En cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">A venir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Ecouler</a>
                </li>
            </ul>
        </nav>
        <!-- FIN ASIDE -->
        <!-- DEBUT CONTENU VIA OB START -->
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">

        </main>
        <!-- FIN CONTENU -->
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.7.1/spectrum.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js'></script>
<script  src="../Assets/js/text-editor/index.js"></script>
<script  src="../Assets/js/text-editor/main.js"></script>
<!-- MAIN SCRIPT -->
<script src="../Assets/js/main.js"></script>
</body>
</html>
