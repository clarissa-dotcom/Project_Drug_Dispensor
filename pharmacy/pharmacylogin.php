<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Login</title>
</head>
<body>
    <form method="POST" action="pharmacyloginpage.php">
        <h2>Pharmacy Login</h2>

        <?php
        if(isset($_GET['error'])){
        ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php
        }
        ?>


    <label for="Pharmacy_ID">Enter ID: </label> <br>
    <input type="text" id="Pharmacy_ID" name="Pharmacy_ID"/> <br/>

    <label for="Password">Enter Password: </label> <br>
    <input type="password" name="Password"/> <br>

    <button type="submit" name="Login">Log in</button>
    </form>
</body>
</html>

