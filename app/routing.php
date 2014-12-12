<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('index', new Route('/', array(
    'year' => null,
    '_controller' => 'Acme\\TestBundle\\Controller\\TestController::indexAction',
)));

return $routes;