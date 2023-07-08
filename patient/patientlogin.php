<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
</head>
<body>
    <form method="POST" action="loginpage.php">
        <h2>Patient Login</h2>

        <?php
        if(isset($_GET['error'])){
        ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php
        }
        ?>


    <label for="Patient_SSN">Enter SSN: </label> <br>
    <input type="text" id="Patient_SSN" name="Patient_SSN"/> <br/>

    <label for="Password">Enter Password: </label> <br>
    <input type="password" name="Password"/> <br>

    <button type="submit" name="Login">Log in</button>
    </form>
</body>
</html>

