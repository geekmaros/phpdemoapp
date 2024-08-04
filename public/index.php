<?php
const BASE_PATH = __DIR__ . "/../";

// This Index is our entry file for our app
require BASE_PATH . "Core/functions.php";
//require base_path("Database.php");
//require base_path("Response.php");
spl_autoload_register(function ($class) {

   $class =  str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});


$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//ternary operation below is used to check if the _method key is set in the post request

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);




//$config = require('config.php');
//$db = new Database($config['database']);
//

//$query = "SELECT * FROM posts WHERE id = :id ";
//
//$posts = $db->query($query, ['id' => $id])->fetchAll(PDO::FETCH_ASSOC);
//


