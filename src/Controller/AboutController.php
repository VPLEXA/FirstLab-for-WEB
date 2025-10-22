<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {
        // Данные студента
        $studentData = [
            'fullName' => 'Иванов Иван Иванович',
            'group' => 'ИС-301',
            'course' => 3,
            'university' => 'Технический Университет',
            'specialty' => 'Информационные системы'
        ];

        return $this->render('about/index.html.twig', [
            'student' => $studentData,
        ]);
    }
}