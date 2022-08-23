<?php

require_once './../vendor/autoload.php';
use App\Controller\Connect;
$controller = new Connect();
$view = $controller->start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion </title>
    <!-- FONT AWESOME : Librairie CSS de gestion des icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GOOGLE FONTS : Librairie CSS de gestion des polices, ici nous
         utiliserons la police "Lobster" ainsi que "Nunito" pour le text -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- MON STYLE CSS -->
    <link rel="stylesheet" href="./css/style.css" />
</head>


</head>
<body>
    <!--le corps de la page la balise main-->
<main>
        <div class="content">
            <h1>Connexion</h1>

            <!--formulaire de connexion-->

                <div>
                <form class=form-vertical method=POST>
                    <label for="email">email</label>
                    <input type=text name = email id=email value="<?= $view->newConnect->email?>">
                </div>

                <div>
                    <label for="password">password</label>
                    <input type=text name = password id=password value="<?= $view->newConnect->password?>">
                </div>


                        <div class="btn-group">
                        <button type =connection>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Se connecter</span>
                        </button>
</main>
                        <!-- le pied de page, la balise footer -->
    <footer>
        <div class="footer-content">
            <div class="logo">PizzaShop</div>
            <nav class="sitemap">
                <p>Plan du site</p>
                <ul>
                    <li>Accueil</li>
                    <li>Contact</li>
                    <li>Rechercher</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>




