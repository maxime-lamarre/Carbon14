<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projet Time - Administrateur</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Projet Time - Administrateur</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a class="btn  btn-outline-success my-2 my-sm-0" href="/" type="submit">Déconnexion</a>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Tableau de bord <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feuilles de temps</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rapports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Paramètres</a>
            </li>
          </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Tableau de bord</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <div class="text-muted">Something else</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </section>

          <h2>Utilisateurs</h2>
          <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                <tr>
                <th>#</th>
                <th>Utilisateur</th>
                <th>Feuilles</th>
                <th><a>Supprimer</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><a href="admin-gestionutilisateur">Vincent De Guille-Jacques</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td><a href="admin-gestionutilisateur">Mathieu Poulin</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td><a href="admin-gestionutilisateur">Guillaume Fortin</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
                <th scope="row">4</th>
                <td><a href="admin-gestionutilisateur">Maxime Lamarre</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
                <th scope="row">5</th>
                <td><a href="admin-gestionutilisateur">Boravan Ung</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
                <th scope="row">6</th>
                <td><a href="admin-gestionutilisateur.html">Bertrand Bouge</a></td>
                <td>0 feuilles</td>
                <td><a href="#">Supprimer</a></td>
                </tr>
            </tbody>
            </table>
            <a class="btn  btn-outline-success my-2 my-sm-0" href="/" type="submit">Ajouter un utilisateur</a>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
