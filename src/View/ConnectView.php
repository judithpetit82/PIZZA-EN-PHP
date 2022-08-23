<?php

declare(strict_types=1);

namespace App\View;

use App\Model\DTO\NewPizza;
use App\Model\DTO\NewPizzaError;

/**
 * Contient toutes les données necessaire pour afficher
 * la page de la nouvelle pizza.
 */
class ConnectView
{
    /**
     * Contient la nouvelle pizza
     */
    public New $newConnect;

    /**
     * Contient les erreurs de la nouvelle piz
     */
    public NewConnectError $errorsconnect;

    /**
     * Afin de se construire cette objet à besoin
     * d'un nouvel utilisateur et de ses erreurs
     */
    public function __construct(
        NewConnect $newPizza,
        NewConnectError $errorsconnect,
    ) {
        $this->newPizza = $newPizza;
        $this->errorsconnect = $errorsconnect
    }
}