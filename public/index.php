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
require base_path("Core/router.php");

//$config = require('config.php');
//$db = new Database($config['database']);
//

//$query = "SELECT * FROM posts WHERE id = :id ";
//
//$posts = $db->query($query, ['id' => $id])->fetchAll(PDO::FETCH_ASSOC);
//


