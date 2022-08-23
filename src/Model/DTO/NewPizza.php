<?php

declare(strict_types=1);

namespace App\Model\DTO;

/**
 * Cette classe représente une nouvelle pizza
 * de notre pizzeria. Elle contient sous forme
 * de propriétés tous les champs du formulaire
 * d'inscription.
 */
class NewPizza
{
    public ?string $nom_pizza='';

    public ?string $description_pizza='';

    public ?float $prix = 0.0;

    public ?string $url_image='';


    /**
     * Lors de la construction de l'objet on remplit les propriétés
     * de l'objet avec les données POST du formulaire
     */
    public function __construct()
    {
        // On remplit l'objet avec les données du formulaire en POST
        $this->nom_pizza = isset($_POST['nom_pizza']) ? $_POST['nom_pizza'] : '';
        $this->description_pizza = isset($_POST['description_pizza']) ? $_POST['description_pizza'] : '';
        $this->prix = isset($_POST['prix']) ? (float)$_POST['prix'] : 0.0;
        $this->url_image = isset($_POST['url_image']) ? $_POST['url_image'] : '';
      
    }
}
