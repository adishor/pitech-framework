<?php

namespace Acme\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function indexAction()
    {
        return new Response('test');
    }
}