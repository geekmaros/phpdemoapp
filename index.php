<?php
// This Index is our entry file for our app
require "functions.php";
require "Database.php";
require "router.php";

$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);


// connect to Our MySQL Database




