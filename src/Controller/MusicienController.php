<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use App\Entity\Musicien;
use App\Entity\Groupe;


/**
 * @Route("/musicien", name="musicien")
 */
class MusicienController extends AbstractController
{
    /**
     * @Route("/index" )
     */
    public function index()
    {
        $musicien = new Musicien();
        $groupe = new Groupe();
        $rand = rand(0, 20);
        $faker = Faker\Factory::create('fr_FR');
        $fakereng = Faker\Factory::create('en_US');
        for ($i = 0; $i < $rand; $i++){
            $musiciens = [
            $musicien->setNom($faker->lastname),
            $musicien->setPrenom($faker->name)];    
        }
        $groupe->setNom($fakereng->name);
        
        
        
        return $this->render('musicien/index.html.twig', [
            'musiciens' => $musiciens,
            'groupe' => $groupe
        ]);
    }
}
