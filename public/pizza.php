<?php

// on inclut composer. Cela vas nous permettre d'utiliser
// les « use ». Ces use peuvent être importé et généré automatiquement
// par notre éditeur de code.
require_once './../vendor/autoload.php';

// Le use permet de faire référence à une classe,
// ici la class « InscriptionController » situé 
// dans l'espace de nom : "App\Controller".
// L'espace de nom correspond au répertoire dans src.
use App\Controller\NewPizzaController;

// Création du controller d'inscription
$controller = new NewPizzaController();

// Démarrage du controller d'inscription. Cette méthode
// nous retourne un Objet App\View\InscriptionView avec toutes
// les données nescessaires pour afficher le HTML
$view = $controller->start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>PizzaShop -NewPizza </title>
    <!-- FONT AWESOME : Librairie CSS de gestion des icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GOOGLE FONTS : Librairie CSS de gestion des polices, ici nous
         utiliserons la police "Lobster" ainsi que "Nunito" pour le text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- NOTRE STYLE CSS -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- Header de notre page -->
    <header>
        <nav>
            <div>
                <a href="#home">
                    <i class="fa-solid fa-house"></i>
                </a>
            </div>
            <div>
                <a href="#basket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </a>
                <a href="#user">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
        </nav>
    </header>

    <!-- Le corps de notre page, la balise main -->
    <main>
        <div class="content">
            <h1>Nouvelle Pizza</h1>

            <!-- Formulaire de la pizza -->
            <form class="form-vertical" method="POST">
                
                <div class="form-group">
                    <label for="nom_pizza"> Nom de la Pizza </label>
                    <input type="text" name="nom_pizza"id="nom_pizza" value="<?= $view->newPizza->nom_pizza ?>">
                </div>
                <? if ($view->errorspizza->nom_pizza) : ?>
                    <p class="error"><?= $view->errorspizza->nom_pizza ?></p>
                <? endif ?>
                <div class="form-group">
                    <label for="description_pizza">Description : </label>
                    <input type="text" name="description_pizza" id="description_pizza" value="<?= $view->newPizza->description_pizza?>">
                </div>
                <? if ($view->errorspizza->description_pizza) : ?>
                    <p class="error"><?= $view->errorspizza->description_pizza?></p>
                <? endif ?>
                <div class="form-group">
                    <label for="prix">Prix : </label>
                    <input type="prix" name="prix" id="prix" value="<?= $view->newPizza->prix ?>">
                </div>
                <? if ($view->errorspizza->prix) : ?>
                    <p class="error"><?= $view->errorspizza->prix ?></p>
                <? endif ?>

                <div class="form-group">
                    <label for="url_image">url_image : </label>
                <input type="image" id="image" alt="Login"
                 src="https://cdn.pixabay.com/photo/2020/06/08/16/49/pizza-5275191_1280.jpg" width="100px" height="250px">
               
                <div class="btngroup">
                    <button type="submit">
                        <i class="fa-solid fa-square-pen"></i>
                        <span>Ajouter</span>
                    </button>
                </div>
            </form>
        </div>
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