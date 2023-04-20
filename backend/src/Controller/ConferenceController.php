<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): JsonResponse
    {
        return new Resource(<<<EOF
            <html>
                <body>
                    <img src="/images/under-construction.gif">
                </body>
            </html>
        EOF
        );
    }
}
