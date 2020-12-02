<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <style>
        /* #username {
            margin-left: 2px;
        }

        #password {
            margin-left: 5px;
        } */

        .login-page {
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            height:300px;
            width: 300px;
        }
    </style>
</head>
<body>
    
    <div class="login-page">
        <form action="index.php" method="post" class="login-form form-incline bg-light p-2">
            <fieldset>
                <legend>Login Form</legend>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-secondary m-2" name="submit_btn" value="login">Login</button>

            <div>
                <?php
                    if (isset($_GET['message'])) {
                        $message = $_GET['message'];
                        echo $message;
                    }
                ?>
            </div>

        </form>
    </div>

    <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>

