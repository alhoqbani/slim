<?php

namespace App\Middleware;

use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Interfaces\RouterInterface;

class RedirectIfUnauthenticated
{
    
    protected $router;
    
    /**
     * RedirectIfUnauthenticated constructor.
     *
     * @param \Slim\Interfaces\RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    
    public function __invoke(Request $request, Response $response, $next)
    {
        if (! true) {
            return $response->withRedirect($this->router->pathFor('login'));
        }
       return  $next($request, $response);
    }
}