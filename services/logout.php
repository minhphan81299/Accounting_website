<?php
    session_start();
    unset($_SESSION['logged']);
    unset($_SESSION['username']);

    // destroy session:
    session_destroy();

    // redirect back to welcome page
    $message = "You logged out";
    header("Location:welcome.php?message=$message");
?>