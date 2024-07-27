<?php
require base_path('Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);
$error = [];
if($_SERVER['REQUEST_METHOD'] === 'POST') {


    if(! Validator::string($_POST['body'], 1, 1000) && ! Validator::string($_POST['title'], 1, 500)) {
        $error['body'] = "Body can't be empty";
        $error['title'] = "Add a Title to your note";
    }


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

view("notes/create.view.php", [
    'heading' => "New Note📝",
    'error' => $error
]);

