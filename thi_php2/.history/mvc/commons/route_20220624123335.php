<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();


// danh sach laptop
$router->get('danh-sach-lap-top',[App\Controllers\PassengersController::class,'listPassengers']);
// $router->get('danh-sach-tk', [App\Controllers\HomeController::class, 'listUser']);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>