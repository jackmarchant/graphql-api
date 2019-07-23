<?php

namespace App;

use App\Container;

class App
{
    public function __construct(Container $container)
    {
        $this->database = $container->get('database');
    }

    public function run(): string
    {
        return 'Hello, World!';
    }
}