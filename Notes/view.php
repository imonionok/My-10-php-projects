<?php 
if (isset($_POST['back'])) {
    header("Location: notes.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>re</title>
</head>
<body>

    <?php
    include "conn.php";

    $q = "SELECT note FROM notes";
    $stmt = $conn->query($q);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        echo "No notes found";
    } else {
        echo "<div style='display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;'>";
        echo "<table border='3' style='border-collapse: collapse; margin-bottom: 20px;'>";
        echo "<tr><th> Your Notes </th></tr>";
        
        while ($row = $stmt->fetch()) {
            echo "<tr><td>" . $row['note'] . "</td></tr>";
        }
        echo "</table>";
        echo "<form action='notes.php' method='POST'>";
        echo "<button type='submit' name='back' style='background-color: black; color: white; padding: 10px 20px; border: none; cursor: pointer;'>Back</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>
</body>
</html>
