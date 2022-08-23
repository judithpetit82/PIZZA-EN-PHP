<?php

declare(strict_types=1);

namespace App\Model\DTO;

/**
 * Contient les possibles erreurs d'un nouvelle pizza
 */
class NewPizzaError extends NewPizza
{
    /**
     * Lors de se construction nous laissons tous les
     * champs vides. C'est NewPizzaController qui s'occupe
     * de les remplir !
     */
    public function __construct()
    {
    }
}
