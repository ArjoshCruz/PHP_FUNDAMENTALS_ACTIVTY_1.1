<?php 

session_start();

if(isset($_POST['submitBtn'])) {

    // Get the username and password from the form
    $username = $_POST['username'];
    $password = md5($_POST['password']); 

    // Check if a user is already logged in
    if (isset($_SESSION['username'])) {
        $_SESSION['userLoggedIn'] = "<br> <br>" . $_SESSION['username'] . " is already logged in. Wait for them to logout first.";
        
        header('Location: index.php');
        exit();
    }
    
    // Set the session variables
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // Redirect back to index.php
    header('Location: index.php');
    exit();
}

?>
