<?php
session_start();
ob_start();

if (isset($_SESSION['user-id'])) {
    header("location:insights.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css">
    

    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <?php include '../controllers/handleLogin-Signup/loginProcess.php' ?>
                <?php include '../controllers/handleLogin-Signup/signupProcess.php' ?>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Please sign up your account
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="../imgs/finance.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Please sign in to see more contents!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="../imgs/desk.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="../libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="../../js/app.js"></script>

</body>

</html>