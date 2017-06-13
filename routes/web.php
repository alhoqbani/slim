<?php

use App\Middleware\RedirectIfUnauthenticated;
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->get('/home[/{name}]', \App\Controllers\HomeController::class . ':index');

$app->get('/login', function () {
    return 'login';
})->setName('login');

$app->get('/', function (Request $request, Response $response, $args) {
    $stmt =  $this->db->getPdo()->query('SELECT 1')->fetch(\PDO::FETCH_OBJ);
    dump($stmt);
});//->add(new RedirectIfUnauthenticated($container->get('router')));