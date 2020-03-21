<?php
require __DIR__ . '/../db-01-connection/index.php';

//extra: puneti instructiunile intr-o functie
// $statement = $conn->prepare("SELECT * FROM users WHERE LOWER(nume) LIKE '%Vasile%'");
$statement = $conn->prepare("SELECT * FROM users WHERE nume LIKE '%Vasile%' AND id < 20 OR id > 1200");
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';