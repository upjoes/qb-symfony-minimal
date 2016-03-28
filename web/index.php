<?php

require_once __DIR__.'/../vendor/autoload.php';

use Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$dotenv = new Dotenv(__DIR__.'/../');
$dotenv->load();

$env   = getenv('SYMFONY_ENV') ?: 'prod';
$debug = ('0' !== getenv('SYMFONY_DEBUG')) && ('prod' !== $env);

if ($debug) {
    Debug::enable();
}

$request  = Request::createFromGlobals();
$kernel   = new AppKernel($env, $debug);
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
