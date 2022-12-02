<?php

namespace App\Controller;

use App\Repository\QualificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QualificationController extends AbstractController
{
    #[Route('/', name: 'home')]
    #[Route('/qualification', name: 'app_qualification')]
    public function index(QualificationRepository $repo): Response
    {
        return $this->render('qualification/index.html.twig', [
            'qualifications' => $repo->findAll(),
        ]);
    }

    #[Route('/qualification/add', name: 'add_qualification')]
    public function add(): Response
    {
        return $this->render('qualification/index.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }

    #[Route('/qualification/{id}}', name: 'show_qualification')]
    public function show(): Response
    {
        return $this->render('qualification/index.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }

    #[Route('/qualification/edit/{id}', name: 'edit_qualification')]
    public function edit(): Response
    {
        return $this->render('qualification/index.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }

    #[Route('/qualification/delete/{i}', name: 'delete_qualification')]
    public function delete(): Response
    {
        return $this->render('qualification/index.html.twig', [
            'controller_name' => 'QualificationController',
        ]);
    }
}
