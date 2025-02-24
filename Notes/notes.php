<?php

include "conn.php";

if (isset($_POST['add']))
{
    $note = $_POST['note'];



    $sql = "INSERT INTO notes ( note ) VALUES (:note)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":note", $note, PDO::PARAM_STR);
    $stmt->execute();
}
if (isset($_POST['view']))
{
    header("Location: view.php");
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add your Note</title>
</head>

<body>
    <form method="POST" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="20" cols="60" placeholder="Add your Note" style="background-color: rgba(255, 255, 0, 0.3); font-weight: bold; border: 5px solid black; text-align: center;"></textarea>
        </div>
        <button type="submit" name="add" class="btn btn-primary" style="margin-top: 10px; background-color: black; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Add</button>
        <button type="submit" name="view" class="btn btn-primary" style="margin-top: 10px; background-color: black; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">View My Notes</button>
    </form>
</body>

</html>