<?php
declare(strict_types = 1);
namespace App\Entity;
use App\Interfaces\Identite;

class Personne implements Identite
{
    
    private $id;

   
    private $nom;


    private $prenom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    // public function setNom(string $nom): self
    // {
    //     $this->nom = $nom;

    //     return $this;
    // }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    // public function setPrenom(string $prenom): self
    // {
    //     $this->prenom = $prenom;

    //     return $this;
    // }
}
