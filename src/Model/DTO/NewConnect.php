<?php

declare(strict_types=1);

namespace App\Model\DTO;

/**
 * Cette classe représente une nouvelle connexion. Elle contient sous forme
 * de propriétés tous les champs du formulaire
 * de connexion 
 */
class NewConnect
{
    public ?string $email='';

    public ?string $password='';


    /**
     * Lors de la construction de l'objet on remplit les propriétés
     * de l'objet avec les données POST du formulaire
     */
    public function __construct()
    {
        // On remplit l'objet avec les données du formulaire en POST
        $this->nom_pizza = isset($_POST['email']) ? $_POST['email'] : '';
        $this->description_pizza = isset($_POST['password']) ? $_POST['password'] : '';
    }
}