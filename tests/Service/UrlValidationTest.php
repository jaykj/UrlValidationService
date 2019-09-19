<?php

namespace App\Tests\Service;

use App\Service\UrlValidationService;
use App\Repository\Repository;
use PHPUnit\Framework\TestCase;

class UrlValidationTest extends  TestCase
{
    private $mockRepository;
    private $urlValdiatorService;

    public function setUp()
    {
        $this->mockRepository = $this->createMock(Repository::class);
        $this->urlValdiatorService= new UrlValidationService($this->mockRepository);
    }

    public function testvaliidateURl(): void
    {
        $response = array(
                "somedomian.com:8080string/wordvalue",
                "another.com:8087turn/this?parmater",
                "somedomian.com:8065/string/wordvalue",
                 );
        $routeParameters =array  ("somedomian.com:8080string/wordvalue");
        $this->mockRepository->method('getData')
            ->willReturn($response);

        $actual = $this->urlValdiatorService->validateURl($routeParameters);
        $expected = 1;
        $this->assertEquals($expected,$actual, "Returns 1");


    }
}
