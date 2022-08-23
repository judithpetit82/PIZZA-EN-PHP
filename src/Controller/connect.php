<?php

declare(strict_types=1);

namespace App\Controller;

use PDO;
use App\Model\DTO\NewConnect;
use App\Model\DTO\NewConnectError;
use App\View\ConnectView;

/**
 * Voici le controller de la page inscription. Ce controller
 * contient toute la logique de la page d'inscription
 */
class Connect 
{
    /**
     * Voici la méthode qui démarre le controller d'inscription et qui retourne
     * la vue : App\View\InscriptionView
     */
    public function start(): ConnectView
    {
        // Création de l'utilisateur
        $newConnect = new NewConnect();

        // Création des erreurs de l'utilisateur
        $errorsconnect = new NewConnectError();

        // On test si le formulaire a bien été envoyé :
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            // On valide l'email
            if (!$newConnect->email || !filter_var($newUser->email, FILTER_VALIDATE_EMAIL)) {
                $errorsconnect->email = 'Votre email n\'est pas valide';
            }

            // On valide le mot de passe
            if (!$newConnect->password || strlen($newUser->password) < 6) {
                $errorsconnect->password = 'Votre mot de passe est trop court, 6 caractères minimum';
            }

            

            // On teste si il n'y a pas d'erreur
            $hasError = false;
            foreach ($errorsconnect as $key => $value) {
                if ($value) {
                    $hasError = true;
                    break;
                }
            }

            if (!$hasError) {
                // Enregistrement en base de données !
                // 1 connéction à la base de données
                $pdo = new PDO('mysql:dbname=pizza-shop-php;host=127.0.0.1;port=3306', 'root', 'root');

                // 2. Préparation de la requête SQL
                $statement = $pdo->prepare('INSERT INTO connexion (email, password,  phone, city, zipCode, street, supplement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $statement->execute([
                   
                    $newConnect->email,
                    password_hash($newConnect->password, PASSWORD_DEFAULT),
                    
                ]);

                // Redirection vers la page de connexion
                header('Location:./connexion.php');

                // On retourne la vue de la connexion
                return new ConnectView($NewConnect, $errorsconnect);
            }
        }

        // On retourne la vue de l'inscription
        return new InscriptionView($NewConnect, $errorsconnect);
    }
}
