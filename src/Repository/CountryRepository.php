<?php

namespace App\Repository;

use Doctrine\DBAL\Driver\Connection;

class CountryRepository
{
    private $conn;

    public function __construct(Connection $conn) 
    {
        $this->conn = $conn;
    }

    /**
     * Finds all countries
     */
    public function findAll() {

        $queryBuilder = $this->conn->createQueryBuilder();
        $queryBuilder->select('*')->from('countries');

        $countries = $queryBuilder->execute()->fetchAll();

        return $countries;
    }
}