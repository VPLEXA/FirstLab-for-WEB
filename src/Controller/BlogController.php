<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/{id}', name: 'app_blog', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        return $this->render('blog/show.html.twig', [
            'blog_id' => $id,
        ]);
    }
}
