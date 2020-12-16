<?php
// Start the session
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

    $page = $_GET['page'];
    header("Location:../pages/" . $page . ".php");
} else {

    echo "
    <div style='display:flex;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    justify-content: center;'>
    <div style='background-image:url(../imgs/robot-error.png);
    width: 300px;
    height: 200px;
    background-size: contain;
    background-repeat: no-repeat;'></div>
    <div style='margin-top: 31px;
    font-size: 22px;
    font-weight: bold;
    color: #03254C;' class='request_login'>Please log in first to see this page. </div>
    <a style='
    text-decoration: none;
    margin-top: 13px;
    padding: 10px 15px;
    background-color: #EFEDED;
    box-shadow: 6px 4px 2px #A6C5D9;
    border-radius: 10px;' href='/assign/Accounting_website/services/pages/login-signup.php'>Log in </a>
    </div>";
}
