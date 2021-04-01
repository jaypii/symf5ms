<?php
namespace App\Service;

use Doctrine\DBAL\Driver\Connection;
use App\Repository\CountryRepository;

class CountryService 
{
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository) 
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Finds all countries
     */
    public function findAll() {
        $data = $this->countryRepository->findAll();
        return $data;
    }
}