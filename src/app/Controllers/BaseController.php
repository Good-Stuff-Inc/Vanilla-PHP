<?php

namespace App\Controllers;

use Core\App;

abstract class BaseController
{
    /**
     * @var App
     */
    protected $container;

    /**
     * BaseController constructor for initiating the service container.
     */
    public function __construct()
    {
        $this->container = App::class;
    }

    /**
     * Return json.
     *
     * @param array $data
     *
     * @return false|string
     */
    public function jsonResponse($data)
    {
        header('Content-Type: application/json');

        return json_encode($data);
    }
}
