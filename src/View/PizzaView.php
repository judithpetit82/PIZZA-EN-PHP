<?php

declare(strict_types=1);

namespace App\View;

use App\Model\DTO\NewPizza;
use App\Model\DTO\NewPizzaError;

/**
 * Contient toutes les données necessaire pour afficher
 * la page de la nouvelle pizza.
 */
class PizzaView
{
    /**
     * Contient la nouvelle pizza
     */
    public NewPizza $newPizza;

    /**
     * Contient les erreurs de la nouvelle piz
     */
    public NewPizzaError $errorspizza;

    /**
     * Afin de se construire cette objet à besoin
     * d'un nouvel utilisateur et de ses erreurs
     */
    public function __construct(
        NewPizza $newPizza,
        NewPizzaError $errorspizza,
    ) {
        $this->newPizza = $newPizza;
        $this->errorspizza = $errorspizza;
    }
}
