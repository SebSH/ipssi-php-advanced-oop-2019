<?php
declare(strict_types = 1);
namespace App\Interfaces;

interface Identite
{
    public function getNom(): string;
     
    public function getPrenom(): string;
    
}