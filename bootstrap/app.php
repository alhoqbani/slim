<?php

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);

require_once __DIR__ . '/container.php';

require_once __DIR__ . '/../routes/web.php';
