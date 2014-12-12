<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\EventDispatcher;

require_once __DIR__ . '/../app/bootstrap.php';


require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel();
$kernel->loadClasses();


$request = Request::createFromGlobals();

$context = new Routing\RequestContext();
$context->fromRequest($request);

$routes = include_once __DIR__ . '/../app/routing.php';

$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$resolver = new HttpKernel\Controller\ControllerResolver();

$dispatcher = new EventDispatcher\EventDispatcher();
$dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher));

$framework = new Pitech\FrameworkBundle\Framework($dispatcher, $resolver);
$response = $framework->handle($request);

$response->send();