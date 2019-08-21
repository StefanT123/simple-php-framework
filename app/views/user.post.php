<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=cf_test', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

    $statement->execute($_POST);

    header('Location: /index.php');
} catch (Exception $e) {
    var_dump($e);
}
