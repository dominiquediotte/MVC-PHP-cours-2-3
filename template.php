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
        <div class="container">
            <h1><?= $title ?></h1>
            <?= $content ?>

            <div class="row">
                <div class="col">
                    Colonne 1
                </div>
                <div class="col">
                    Colonne 2
                </div>
            </div>
        </div>

        <?php require('includeJS.php') ?>
    </body>
</html>
