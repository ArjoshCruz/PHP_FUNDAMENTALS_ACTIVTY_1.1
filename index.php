<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1</title>
</head>
<body>
    <?php session_start(); ?>

    <form action="handleForm.php" method="POST">
        <p>Username: <input type="text" placeholder="First name here" name="username" required></p>
        <p>Password: <input type="password" placeholder="Password here" name="password" required></p>
        <p><input type="submit" value="Submit" name="submitBtn"></p>
    </form>
    <a href="unset.php"><button>Logout</button></a>

    <?php 
    if (isset($_SESSION['userLoggedIn'])){
        echo $_SESSION['userLoggedIn'];
    } else {
        if (isset($_SESSION['username']) && isset($_SESSION['password'])){
            echo "<br> <h2>User logged in: " . $_SESSION['username'] . "<br>Password: <br>" . $_SESSION['password'];
        }
    }

    ?>
    
</body>
</html>
