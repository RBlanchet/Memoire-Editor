<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Memoire Editor</title>

    <link href="styles/styles.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
    <link href="https://v4-alpha.getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Text editor assets -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.7.1/spectrum.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/css/perfect-scrollbar.min.css'>
    <link rel="stylesheet" href="styles/text-editor/style.css">
</head>

<body class="body-class">
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
              <li class="nav-item nav-item-li" style="color: white;">Bonjour identifiant</li>
              <li class="nav-item nav-item-li">
                <button style='margin-left: 10px' class='btn btn-danger' name='connect-button' type='submit' value='connect'>Deconnecter</button>
              </li>
            <ul>
          </form>
        </li>
    </div>
  </nav>

<div class="container-fluid">
    <div class="row">
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
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <div class="title-edited-content">
            <h1> Octobre 2017 </h1>
          </div>
          <div class="editor">
            <div class="wrap">
              <div class="toolbar">
                <button id="bold" title="Bold (Ctrl+B)"><i class="fa fa-bold"></i></button>
                <button id="italic" title="Italic (Ctrl+I)"><i class="fa fa-italic"></i></button>
                <button id="underline" title="Underline (Ctrl+U)"><i class="fa fa-underline"></i></button>
                <select name="fonts" id="fonts">
                  <option value="Arial" selected>Arial</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Tahoma">Tahoma</option>
                  <option value="Times New Roman">Times New Roman</option>
                  <option value="Verdana">Verdana</option>
                  <option value="Impact">Impact</option>
                  <option value="Courier New">Courier New</option>
                </select>
                <select name="size" id="size">
                  <option value="8">8</option>
                  <option value="10">10</option>
                  <option value="12">12</option>
                  <option value="14">14</option>
                  <option value="16" selected>16</option>
                  <option value="18">18</option>
                  <option value="20">20</option>
                  <option value="22">22</option>
                  <option value="24">24</option>
                  <option value="26">26</option>
                </select>
                <input type="text" id="color" />
                <button id="align-left" title="Left"><i class="fa fa-align-left"></i></button>
                <button id="align-center" title="Center"><i class="fa fa-align-center"></i></button>
                <button id="align-right" title="Right"><i class="fa fa-align-right"></i></button>
                <button id="list-ul" title="Unordered List"><i class="fa fa-list-ul"></i></button>
                <button id="list-ol" title="Ordered List"><i class="fa fa-list-ol"></i></button>
              </div>
              <div id="text-content" class="editor-text" contenteditable>
                <?php
                  if (isset($_POST['content'])) {
                    echo $_POST['content'];
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="text-editor-submit">
            <button class="btn btn-success btn-lg" id="submit-text-editor">Editer</button>
            <button class="btn btn-danger btn-lg" id="submit-text-editor">Retour</button>
          </div>
        </main>
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
<script  src="js/text-editor/index.js"></script>
<script  src="js/text-editor/main.js"></script>
<!-- MAIN SCRIPT -->
<script src="js/main.js"></script>
</body>
</html>
