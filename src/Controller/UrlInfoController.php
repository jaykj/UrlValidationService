<?php

namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;

    class UrlInfoController extends AbstractController
    {
        public function index(Request $request)

        {

            $routeName = $request->attributes->get('_route');
            $routeParameters = $request->attributes->get('_route_params');

            var_dump($routeParameters);
            return new Response(
                '<html><body>'.$routeName.'</body><html>'
            );

        }
    }
