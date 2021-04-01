<?php

namespace App\Controller;

use App\Service\UserService;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    #[Route('/data', name: 'data')]
    public function index(UserService $userService): Response
    {
        $data = $userService->getUsers();

        return $this->json($data);
    }
}
