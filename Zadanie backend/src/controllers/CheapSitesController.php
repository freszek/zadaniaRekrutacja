<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Site;

class CheapSitesController
{
    public function findCheapSites(Request $request, Response $response, array $args): Response
{
    $cheapSites = Site::where('price', '<', 200)
                    ->where('traffic', '>', 1000)
                    ->orWhere('quality', '>', 7)
                    ->get();

    $responseData = [
        'requested_site' => null,
        'similar_sites' => $cheapSites
    ];

    return $response->withJson($responseData);
}

}
