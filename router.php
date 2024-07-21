<?php
// Define routes
$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];




// function that maps route to controller
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}


// function that aborts the request
function abort($statusCode = 404)
{
    http_response_code($statusCode);

    require ("controllers/{$statusCode}.php");

    die($statusCode);
}

routeToController($uri, $routes);

