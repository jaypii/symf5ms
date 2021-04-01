<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use App\Service\CountryService;
use App\Repository\CountryRepository;

class MyController extends AbstractController
{
    #[Route('/countries', name: 'countries')]
    public function index(CountryRepository $countryRepository): Response
    {
        //$countries = $countryService->findAll();
        
        //return $this->json([
        //    'countries' => $countries
        //]);
        
        return $this->render('my/index.html.twig', [
            'countries' => $countryRepository->findAll(),
        ]);
    }
}
