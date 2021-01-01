<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->get('/apis-rest-php/apis/test/{value}', function (Request $request, Response $response, $args) {
       $value = $args['value'];
       $response->getBody()->write("Value: $value");
       return $response;
});

//Users
require "controller.php";

$app->post('/apis-rest-php/apis/users/insert', function (Request $request, Response $response, $args) {
       $body = $request->getBody();
       $data = json_decode($body, true);
       $controller = new Controller();
       $result = $controller->insert($data);
       $response->getBody()->write($result);
       $response = $response->withHeader('Content-type', 'application/json');
       $response = $response->withHeader('Access-Control-Allow-Origin', '*');
       return $response;
});

$app->post('/apis-rest-php/apis/users/update', function (Request $request, Response $response, $args) {
       $body = $request->getBody();
       $data = json_decode($body, true);
       $controller = new Controller();
       $result = $controller->update($data);
       $response->getBody()->write($result);
       $response = $response->withHeader('Content-type', 'application/json');
       $response = $response->withHeader('Access-Control-Allow-Origin', '*');
       return $response;
});

$app->delete('/apis-rest-php/apis/users/delete/{id}', function (Request $request, Response $response, $args) {
       $controller = new Controller();
       $result = $controller->delete($args);
       $response->getBody()->write($result);
       $response = $response->withHeader('Content-type', 'application/json');
       $response = $response->withHeader('Access-Control-Allow-Origin', '*');
       return $response;
});


$app->get('/apis-rest-php/apis/users/fetchAll', function (Request $request, Response $response, $args) {
       $controller = new Controller();
       $result = $controller->fetchAll($args);
       $response->getBody()->write($result);
       $response = $response->withHeader('Content-type', 'application/json');
       $response = $response->withHeader('Access-Control-Allow-Origin', '*');
       return $response;
});

$app->get('/apis-rest-php/apis/users/fetchById/{id}', function (Request $request, Response $response, $args) {
       $controller = new Controller();
       $result = $controller->fetchById($args);
       $response->getBody()->write($result);
       $response = $response->withHeader('Content-type', 'application/json');
       $response = $response->withHeader('Access-Control-Allow-Origin', '*');
       return $response;
});
