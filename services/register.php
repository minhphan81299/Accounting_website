<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <?php include "components/header_links.php" ?>

    <style> 
    .register-page {
        width: 100%;
        height: 450px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .register-form {
        margin-top: 200px;
        height:550px;
        width: 310px;
    }
    </style>
</head>
<body>
    
    <div class="register-page">
        <form action="index.php" method="post" class="register-form form-incline bg-light p-2">
            <fieldset>
                <legend>Register Form</legend>

                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>

                <div class="form-group">
                    <label for="pass_confirm">Password Confirmation:</label>
                    <input type="password" class="form-control" id="pass_confirm" name="pass_confirm" required>
                </div>
            </fieldset>

            <div class="text-center">
                <button type="submit" class="btn btn-secondary m-2" name="submit_btn" value="register">Register</button>
            </div>
        </form>
    </div>

    <?php include "components/footer_links.php" ?>
</body>
</html>

