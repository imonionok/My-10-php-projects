<?php

//$host = "localhost";
//$port = 3307;
//$dbname = "notes_database";
$dns = "mysql:host=localhost; port=3307; dbname=notes_database";
$username = "root";
$password = "";
$options = array (
                    PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                );

try {
    //$conn = new PDO("mysql:host=$host; port=$port; dbname=$dbname", $username, $password);
    $conn = new PDO($dns, $username, $password , $options);
    //echo "Connected using $username";
    } catch (PDOException $e) {
    echo "Failed to connect to the database: " . $e->getMessage();
    exit;
}

?>