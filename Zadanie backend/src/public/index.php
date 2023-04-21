<?php
use App\src\controllers\SimilarSitesController;
use App\src\controllers\CheapSitesController;

require __DIR__ . '../../vendor/autoload.php';

$app = new Slim\App();

$app->get('/podobne-strony', function($request, $response, $args) {
    $similarSitesController = new SimilarSitesController();
    return $similarSitesController->findSimilarSites($request, $response, $args);
});

$app->get('/tanie-strony', function($request, $response, $args) {
    $cheapSitesController = new CheapSitesController();
    return $cheapSitesController->findCheapSites($request, $response, $args);
});

$app->run();
?>