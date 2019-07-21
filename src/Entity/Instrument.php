<?php
declare(strict_types = 1);
namespace App\Entity;
use App\Interfaces\CatInstru;


class Instrument  implements CatInstru
{
    private $nom;
    private $categorie;

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
