<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

class Controller
{
    protected $c;
    
    /**
     * Controller constructor.
     *
     * @param \Interop\Container\ContainerInterface $c
     */
    public function __construct(ContainerInterface $c)
    {
        $this->c = $c;
    }
}