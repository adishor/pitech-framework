<?php

use Pitech\FrameworkBundle\PitechKernel;

class AppKernel extends PitechKernel
{

    /**
     * Returns an array of bundles to register.
     *
     */
    public function registerBundles()
    {
        return array(
            'Acme' => __DIR__ . '/../src',
        );

    }

}