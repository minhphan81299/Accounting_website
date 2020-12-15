<?php
    // Start the session
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
        
        $page = $_GET['page'];
        header("Location:../pages/" . $page . ".php");
    } 
    else {
        echo "Please log in first to see this page.";
    }
?>