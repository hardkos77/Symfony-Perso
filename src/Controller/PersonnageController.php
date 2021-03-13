<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        $j1 =[
            'nom' => 'Marc',
            'âge' => 25,
            'sexe' => true,
            'caractéristiques' => [
                'force' => 2,
                'agilité' => 6,
                'intelligence' => 14,
        ]];
        $j2 =[
            'nom' => 'Milo',
            'âge' => 25,
            'sexe' => true,
            'caractéristiques' => [
                'force' => 5,
                'agilité' => 3,
                'intelligence' => 20,
        ]];
        $j3 =[
            'nom' => 'Tya',
            'âge' => 25,
            'sexe' => true,
            'caractéristiques' => [
                'force' => 15,
                'agilité' => 10,
                'intelligence' => 8,
        ]];
        $players = [
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3,
        ];
        return $this->render('personnage/persos.html.twig', [
            "players" => $players,
        ]);
    }
}
