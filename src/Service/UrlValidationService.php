<?php

namespace App\Service;

use App\Repository\Repository;

class UrlValidationService
{
   function __construct(Repository $repository)
    {
        $this->datasettocompare = $repository;
    }
    public function validateURl(array $urltovalidate)
    {
        $ursltoblock = $this->datasettocompare->getData();
        $isValid = 0==count(array_diff($urltovalidate,$ursltoblock));
        return  $isValid;
    }
}