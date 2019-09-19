<?php

namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use App\Service\UrlValidationService;

    class UrlInfoController extends AbstractController
    {
        public function index(Request $request, UrlValidationService $urlValidationService)

        {

            //$routeName = $request->attributes->get('_route');
            $routeParameters = $request->attributes->get('_route_params');
            $isValid = $urlValidationService->validateURl($routeParameters);
            //var_dump($routeParameters);
            return new Response(
                '<html><body>'.$isValid.'</body><html>'
            );

        }
    }
