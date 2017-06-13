<?php

$container = $app->getContainer();

$container['config'] = function () {
    return new \App\Helpers\Config();
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../resources/views', [
        'cache' => '../resources/cache',
    ]);
    
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    
    return $view;
};

$container['db'] = function ($container) {
    return new \App\Helpers\Database($container->config);
};

$container['notFoundHandler'] = function ($c) {
    return new \App\Handlers\NotFoundHandler($c->get('view'));
};