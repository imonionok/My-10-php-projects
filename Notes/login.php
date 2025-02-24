<?php

include "conn.php";

if (isset($_POST['add'])) 
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $sql = "INSERT INTO info (username, password) VALUES (:user, :pass)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->execute();
}

header("Location: notes.php");

?>