<?php
declare(strict_types = 1);
namespace App\Entity;

class Groupe
{
    private $nom;


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
