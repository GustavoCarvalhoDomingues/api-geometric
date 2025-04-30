<?php
 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\HttpNotFoundException;
use gustavodomingues\Tarefas\Service\TarefasService;
use Projetux\Infra\Debug;
use gustavodomingues\ApiGeometry\Math\Geometria;
//use Slim\Exception\HttpNotFoundException;
 
require __DIR__ . '/vendor/autoload.php';
 
$app = AppFactory::create();
//  middleware é um evento que ocorre antes da requisição chegar na rota
 
$app->post("/geometria/ret/{num1}/{num2}", function(Request $request, Response $response, array $args){
    $geometria = new geometria();
    $resultado = $geometria->calcularAreaRetangulo($args['num1'],$args['num2']);
    $response->getBody()->write((string)$resultado);
    return $response;
});
 
$app->post("/geometria/tri/{num1}/{num2}", function(Request $request, Response $response, array $args){
    $geometria = new geometria();
    $resultado = $geometria->calcularAreaTriangulo($args['num1'],$args['num2']);
    $response->getBody()->write((string)$resultado);
    return $response;
});
 
$app->run();
?>
 