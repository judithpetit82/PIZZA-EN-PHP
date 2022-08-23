<?php

declare(strict_types=1);

namespace App\Controller;

use PDO;
use App\Model\DTO\NewPizza;
use App\Model\DTO\NewPizzaError;
use App\View\PizzaView;

/**
 * Voici le controller de la page pizza. Ce controller
 * contient toute la logique de la page pizza
 */
class NewPizzaController
{
    /**
     * Voici la méthode qui démarre le controller de la nouvelle pizza et qui retourne
     * la vue : App\View\PizzaView
     */
    public function start(): PizzaView
    {
        // Création de la nouvelle Pizza
        $newPizza = new NewPizza();

        // Création des erreurs du nouvel utilisateur
        $errorspizza = new NewPizzaError();

        // On teste si le formulaire a bien été envoyé :
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // On valide le nom de la pizza
            if (!$newPizza->nom_pizza || strlen($newPizza->nom_pizza) <15) {
                $errorspizza->nom_pizza = 'Vous devez spécifier un nom de 15 caractères minimum';
            }

            // On valide une description de la pizza
            if (!$newPizza->description_pizza|| strlen($newPizza->description_pizza) < 500) {
                $errorspizza->description_pizza = 'Vous devez spécifier une description de 500 caractères minimum';
            }

            // On valide le prix de la pizza 
            if (!$newPizza->prix || !filter_var($newPizza->prix, FILTER_VALIDATE_FLOAT)) {
                $errorspizza->prix = 'Votre prix n\'est pas correct';
            }

            // On valide l'image de la pizza
            if (!$newPizza->url_image || !filter_var($newPizza->url_image, FILTER_VALIDATE_URL)) {
                $errorspizza->prix = 'Votre image n\'est pas correct bien dimensionnee';
            }
            
            // On teste si il n'y a pas d'erreur
            $hasError = false;
            foreach ($errorspizza as $key => $value) {
                if ($value) {
                    $hasError = true;
                    break;
                }
            }

            if (!$hasError) {
                // Enregistrement en base de données !
                // 1 connexion à la base de données
                $pdo = new PDO('mysql:dbname=pizza-shop-php;host=127.0.0.1;port=3306', 'root', 'root');

                // 2. Préparation de la requête SQL
                $statement = $pdo->prepare('INSERT INTO pizza (nom_pizza, description_pizza, prix, url_image) VALUES (?, ?, ?,?)');
                $statement->execute([
                    $newPizza->nom_pizza,
                    $newPizza->description_pizza,
                    $newPizza->prix,
                ]);


             // Redirection vers la page de la pizza
                header('Location:./pizza.php');

                // On retourne la vue de la pizza
                return new PizzaView($newPizza, $errorspizza);
            }
        }

        // On retourne la vue de la pizza
        return new PizzaView($newPizza, $errorspizza);
    }
}
