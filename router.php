<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Define routes
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

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

