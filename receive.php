<?php
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo nl2br("Name: $name" . "\n");
    echo nl2br("Email: $email" . "\n");
?>