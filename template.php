<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/template.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mon site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usager
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Liste des usagers</a>
                        <a class="dropdown-item" href="#">Ajouter un usager</a>
                        <a class="dropdown-item" href="#">Rechercher</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h1><?= $title ?></h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </tr>
            </thead>
            <tbody>
                <?= $content ?>
            </tbody>
        </table>
    </div>

    <div class="container" id="grid">
        <div class="row">
            <div class="col-sm-6 col-md-3" style="background-color: tomato;"></div>
            <div class="col" style="background-color: turquoise;"></div>
            <div class="col" style="background-color: yellow;"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6" style="background-color: teal;"></div>
            <div class="col" style="background-color: orange;"></div>
            <div class="col" style="background-color: thistle;"></div>
            <div class="col" style="background-color: royalblue;"></div>
        </div>
        <div class="row row-cols-2">
            <div class="col" style="background-color: orchid;"></div>
            <div class="col" style="background-color: peru;"></div>
            <div class="col" style="background-color: plum;"></div>
            <div class="col" style="background-color: wheat;"></div>
            <div class="col" style="background-color: mediumslateblue;"></div>
            <div class="col" style="background-color: chartreuse;"></div>
        </div>
    </div>

    <?php require('includeJS.php') ?>
</body>

</html>
