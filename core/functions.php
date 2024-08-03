<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function abort($statusCode = 404)
{
    http_response_code($statusCode);

    require base_path("controllers/{$statusCode}.php");

    die($statusCode);
}

function authorize ($condition, $statusCode = Response::FORBIDDEN)
{
    if(!$condition){
        abort($statusCode);
    }
}


function base_path($path): string
{
 return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);
    require base_path("views/{$path}");
}

