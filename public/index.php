<?php 
namespace Framework;

use Framework\App;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;

require "../vendor/autoload.php";

$app = new App();
$demo = array();

$response = $app->run(ServerRequest::fromGlobals());
\Http\Response\send($response);
