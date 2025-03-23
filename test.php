<?php
$dsn = 'mysql:host=10.110.13.20;dbname=roc_portal';
$username = 'root';
$password = 'Serverabc123#';

try {
    $dbh = new PDO($dsn, $username, $password);
    echo "Connected to database";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>