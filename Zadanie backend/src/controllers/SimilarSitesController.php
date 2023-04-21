<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Site;

class SimilarSitesController
{
    public function findSimilarSites(Request $request, Response $response, array $args)
    {
        $requested_site = ... // tutaj wykorzystaj zapytanie HTTP, aby pobrać requested_site z URL
        $similar_sites = ... // tutaj umieść logikę i wywołanie metody dla zadania 1
        $data = [
            'requested_site' => $requested_site,
            'similar_sites' => $similar_sites,
        ];
        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
