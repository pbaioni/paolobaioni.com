<?php
// #DEBUG - Display of all errors
error_reporting(E_ALL);


// #CONTROLLER
require_once __DIR__ . '/../app/controllers/MainController.php';
require_once __DIR__ . '/../app/controllers/CatalogController.php';


// ======================================================================
// #ROUTING_URL
// ======================================================================

/* Altorouter */
require_once __DIR__."/../vendor/altorouter/altorouter/AltoRouter.php";
$router = new AltoRouter();

$currentURL = $_GET['_url'] ?? "/" ;
$baseURL = $_SERVER['BASE_URI'];
$router->setBasePath($baseURL);

/* Map URL */
$router->map( 
    'GET', '/', [
        "controller"   => "MainController",
        "method"       => "home"],   
    'main-home'             
);
$router->map( 
    'GET', '/register',[
        "controller"   => "MainController",
        "method"       => "register"],   
    'main-register'             
);
$router->map( 
    'GET','/store',[
        "controller"   => "CatalogController",
        "method"       => "store"],   
    'catalog-store'             
);
$router->map( 
    'GET','/blog',  [
        "controller"   => "MainController",
        "method"       => "blog"],   
    'main-blog'             
);
$router->map( 
    'GET','/contact',  [
        "controller"   => "MainController",
        "method"       => "contact"],   
    'main-contact'             
);
$router->map( 
    'GET','/about',  [
        "controller"   => "MainController",
        "method"       => "about"],   
    'main-about'             
);

/* Match url */
$match = $router->match();

/* Dispatcher URL */
if($match)
{
    $methodToCall = $match["target"]["method"];
    $controllerToCall = $match['target']['controller'];

    $controller = new $controllerToCall();
    $controller->$methodToCall($match["params"]);
}
else
{
    exit( "404 Not Found" );
}



/* Init of variables that will be used in methods */
$viewVars = [];