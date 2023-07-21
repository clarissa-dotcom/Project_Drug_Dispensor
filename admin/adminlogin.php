<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="POST" action="adminloginpage.php">
        <h2>Admin Login</h2>

        <?php
        if(isset($_GET['error'])){
        ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php
        }
        ?>


    <label for="Admin_ID">Enter ID: </label> <br>
    <input type="text" id="Admin_ID" name="Admin_ID"/> <br/>

    <label for="Password">Enter Password: </label> <br>
    <input type="password" name="Password"/> <br>

    <button type="submit" name="Login">Log in</button>
    </form>
</body>
</html>

