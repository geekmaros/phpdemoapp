<?php
// Define routes
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];




// function that maps route to controller
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    }else{
        abort();
    }
}


// function that aborts the request
function abort($statusCode = 404)
{
    http_response_code($statusCode);

    require base_path("controllers/{$statusCode}.php");

    die($statusCode);
}

routeToController($uri, $routes);

