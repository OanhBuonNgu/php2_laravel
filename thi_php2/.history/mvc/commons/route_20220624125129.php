<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// $router->get('danh-sach-tk', [App\Controllers\HomeController::class, 'listUser']);
// danh sach laptop
$router->get('danh-sach-lap-top',[App\Controllers\LaptopController::class,'listLaptops']);
// tao laptop
$router->get('tao-lt',[App\Controllers\LaptopController::class,'addLaptop']);
$router->post('tao-lt', [App\Controllers\LaptopController::class, 'addNewLaptop']);
// sua laptop
$router->get('sua-lt/{id}', [App\Controllers\PassengersController::class, 'passengerEditForm']);
$router->post('sua-lt/{id}', [App\Controllers\PassengersController::class, 'saveEditPassenger']);

// xóa hk 
$router->get('xoa-lt/{id}', [App\Controllers\PassengersController::class, 'removeLaptop']);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>