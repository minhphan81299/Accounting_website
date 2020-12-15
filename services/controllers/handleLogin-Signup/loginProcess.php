<?php
ob_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'web-assign';
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    echo 'Faild to connect MySQL' . mysqli_connect_error();
}

if (isset($_POST['signinUsername']) && isset($_POST['signinPassword'])) {

    $username = $_POST['signinUsername'];
    $password = $_POST['signinPassword'];
    if ($stmt = $con->prepare('SELECT userId,signinPassword FROM login WHERE signinUsername = ?')) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userId, $userPassword);
            $stmt->fetch();
            if (password_verify($password, $userPassword)) {
                session_start();
                session_regenerate_id();
                // setcookie('user-id', $userId, time() + 36000);
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['userName'] = $username;
                $_SESSION['userId'] = $userId;
                header("location:../../services/pages/insights.php");
            } else {
                echo "<div> Wrong pass </div>";
            }
        }
        else{
            echo "<div>Server error</div>";
        }


        $stmt->close();
    }
}
echo '
<form class="sign-in-form" method="POST">
                    <h2 id="signin-title" class="title">Sign in</h2>
                    ';


echo '                  

        <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="signinUsername" type="text" placeholder="Username" name="signinUsername" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="signinPassWord" type="password" placeholder="Password" name="signinPassword" />
                    </div>
                    <input id="sign-in-form" type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form> ';
