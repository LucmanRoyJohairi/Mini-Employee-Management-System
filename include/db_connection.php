<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'testdb';

//connection
$connection = new mysqli($serverName, $username, $password, $dbName);

// print_r($connection);

if ($connection->connect_error) {
    die('failed to connect to database');
}
