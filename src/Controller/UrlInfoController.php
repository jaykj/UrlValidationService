<?php

namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\HttpFoundation\Request;
    use App\Service\UrlValidationService;

    class UrlInfoController extends AbstractController
    {
        public function index(Request $request, UrlValidationService $urlValidationService)

        {

            $routeParameters = $request->attributes->get('_route_params');
            $isValid = $urlValidationService->validateURl($routeParameters);
            $status =$isValid == 1 ? "Blocked":"Allowed";
            return new JsonResponse(
                 $status
            );

        }
    }
