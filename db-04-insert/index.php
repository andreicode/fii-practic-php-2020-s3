<?php

require __DIR__ . '/../db-01-connection/index.php';

$query = "INSERT INTO users (id, nume, email, parola) VALUES (NULL, 'Vasile', 'vasile1@email.com', 'password')";
$conn->exec($query);
// $var = 'zzz';
// $str = "tes $var test";

// echo $str;

// for ($i = 200; $i < 2000; $i++) {

//     $nume = "Vasile{$i}";
//     $email = "vasile{$i}@email.com";
//     if ($i % 2 === 0) {
//         $nume = "George{$i}";
//         $email = "george{$i}@email.com";
//     }

//     $query = "INSERT INTO users (id, nume, email, parola) VALUES (NULL, '{$nume}', '{$email}', 'password')";
//     $conn->exec($query);
// }