<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PiloteController extends AbstractController
{
    #[Route('/pilote', name: 'app_pilote')]
    public function index(): Response
    {
        return $this->render('pilote/index.html.twig', [
            'controller_name' => 'PiloteController',
        ]);
    }

    #[Route('/pilote/add', name: 'add_pilote')]
    public function add(): Response
    {
        return $this->render('pilote/index.html.twig', [
            'controller_name' => 'PiloteController',
        ]);
    }

    #[Route('/pilote/{id}', name: 'show')]
    public function show(): Response
    {
        return $this->render('pilote/index.html.twig', [
            'controller_name' => 'PiloteController',
        ]);
    }

    #[Route('/pilote/edit/{id}', name: 'edit_pilote')]
    public function edit(): Response
    {
        return $this->render('pilote/index.html.twig', [
            'controller_name' => 'PiloteController',
        ]);
    }

    #[Route('/pilote/delete/{id}', name: 'delete_pilote')]
    public function delete(): Response
    {
        return $this->render('pilote/index.html.twig', [
            'controller_name' => 'PiloteController',
        ]);
    }
}
