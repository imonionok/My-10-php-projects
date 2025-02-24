<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>

<body>
    <div class="container" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center;">Sign Up</h1>
        <form method="post" action="login.php">
            <div class="form-floating mb-3" style="margin-bottom: 15px;">
                <input type="text" name="user" class="form-control" aria-label="user" id="floatingInput" placeholder="Username" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>
            <div class="form-floating" style="margin-bottom: 15px;">
                <input type="password" name="pass" class="form-control" aria-label="pass" id="floatingPassword" placeholder="Password" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>
            <button type="submit" name="add" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px;">Sign Up</button>
        </form>
    </div>
    </div>
</body>

</html>