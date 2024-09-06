<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burgers', name: 'app_burger')]
    public function list(): Response
    {
        return $this->render('burgers.html.twig', [
            'afficher' => 'burgers'
        ]);
    }

    #[Route('/burger/{id}', name: 'burger_per_id')]
    public function show($id): string
    {
        return $this->render('burgers.html.twig', [
            'afficher' => '',
            'id' => $id
        ]);
    }
}
