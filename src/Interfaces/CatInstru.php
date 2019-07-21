<?php
declare(strict_types = 1);
namespace App\Interfaces;

interface CatInstru
{
    public function getCategorie(): string;
    public function getNom(): string;
}