<?php declare(strict_types=1);


use VilhoBanike\Framework\Http\Kernel;
use VilhoBanike\Framework\Http\Request;
use VilhoBanike\Framework\Http\Response;


define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__) . '/vendor/autoload.php';


// request received
$request = Request::createFromGlobals();


// perform some logic


// send a response (string of content)


$kernel = new Kernel();

$response = $kernel->handle($request);


$response->send();
