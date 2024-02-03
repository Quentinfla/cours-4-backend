<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntityController extends AbstractController
{
    #[Route('/entity', name: 'app_entity')]
    public function index(): Response
    {
        return $this->render('entity/index.html.twig', [
            'controller_name' => 'EntityController',
        ]);
    }
}
