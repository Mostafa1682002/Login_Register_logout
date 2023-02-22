<?php
try {
    $user = 'root';
    $password = '';
    $dbname = 'login';
    $host = 'localhost';
    $connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}
