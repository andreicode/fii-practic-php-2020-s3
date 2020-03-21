<?php
session_start();
// 1. lasam doar userii logati


if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}

require __DIR__ . '/../db-01-connection/index.php';

$id = $_SESSION['id'];

$statement = $conn->prepare("SELECT nume FROM users WHERE id='{$id}'");
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

// 2. afisam numele userului
$nume = $results[0]['nume'];

?>

<html>
    <head><title>Dashboard</title></head>
    <body>
        <h3>Welcome to the dashboard, <?php echo $nume ?>! </h3>
        <a href="logout.php">Logout</a>
    </body>
</html>