<?php
require('Validator.php');
$config = require('config.php');
$db = new Database($config['database']);

$heading = "New Note📝";


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = [];

    if(! Validator::string($_POST['body'], 1, 1000) && ! Validator::string($_POST['title'], 1, 500)) {
        $error['body'] = "Body can't be empty";
        $error['title'] = "Add a Title to your note";
    }
//
//    if(strlen($_POST['body']) > 1000 && strlen($_POST['title']) > 500) {
//        $error['body'] = "Body can't be more than 1000 words sorry";
//        $error['title'] = "Title can't be more than 500 words sorry";
//    }


    $body = htmlspecialchars($_POST['body']);
    $title = htmlspecialchars($_POST['title']);
    $user_id = 3;

    if(empty($error)) {

        $db->query("INSERT INTO notes (body, title, user_id) VALUES (:body, :content, :user_id)", [
            'body' => $body,
            'content' => $title,
            'user_id' => $user_id
        ]);
    }

//    header('Location: /notes');
}

require "views/note-create.view.php";

