<?php// session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title="Ecommerce-Accueil" ?></title>
    <header></header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid m-2">
            <!-- <a class="navbar-brand btn btn-warning  m-2" href="menu.php">CONNEXION</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active btn btn-warning  m-2" aria-current="page"
                            href="index.php">BOUTIQUE</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="btn btn-info" href="ajouter.php">AJOUTER</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="btn btn-success" href="paye.php">PAYER</a>
                    </li>

                    <li class="nav-item" id="search">
                        <a href="https://www.nike.com/fr/w/hommes-jordan-chaussures-37eefznik1zy7ok?cp=24158993452_search_%7Cbasket%20jordan%20homme%7C10690196384%7C107180266964%7Ce%7Cc%7CFR%7Cstyles%7C452608684253&gclsrc=aw.ds&ds_rl=1252249&gclid=CjwKCAiAr6-ABhAfEiwADO4sff6gOEHv73k5GTpDn1b507RTNuDC4RsfEq_yPN5H5fbxJvd1zilevBoCsDoQAvD_BwE&gclsrc=aw.ds"
                            class="btn btn-dark  m-2">RECHERCHE</a>
                    </li>
                    <li class="nav-item" style="margin-left: 100%;">
                        <a href="deconnexion.php" class="btn btn-danger">DECONNEXION</a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>

</head>

<body>
    <header>
        <div class="container text-center">

        </div>

    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>