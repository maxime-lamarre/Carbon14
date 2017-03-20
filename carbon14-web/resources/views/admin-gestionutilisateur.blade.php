<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Projet Time - Administrateur</a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Déconnexion</button>
                </form>

        </nav>
        <div class="container">
            <h2>Maxime Lamarre</h3>
            <p>Visualiser feuille de temps pour:</p>
            <form>
            <fieldset disabled>
                <div class="form-group">
                <label for="disabledTextInput">Date de début</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="01/01/2017">
                </div>
                <div class="form-group">
                <label for="disabledSelect">Date de fin</label>
                <select id="disabledSelect" class="form-control">
                    <option>02/02/2017</option>
                </select>
                </div>
                <div class="checkbox">
                <label>
                    <input type="checkbox"> Can't check this
                </label>
                </div>
                <button type="submit" class="btn btn-primary">Exporter</button>
            </fieldset>
            </form>
        </div>
    </body>
</html>
