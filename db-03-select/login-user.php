<?php

require __DIR__ . '/../db-01-connection/index.php';
session_start();


// // var_dump($_POST);
// // $a = '';

// var_dump(empty($a));
// die();

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: login.php');
}
$email = $_POST['email'];
$password = $_POST['password'];

// /**
//  * Date introduse de user
//  */
// $email = 'vasile13z@email.com';
// $password = 'password';


$query = "SELECT * FROM users WHERE email='{$email}' AND parola='{$password}'";

$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

if (!count($results)) {
    header('Location: login.php');
} else {
    $user = $results[0];
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $user['id'];

    header('Location: dashboard.php');
}



