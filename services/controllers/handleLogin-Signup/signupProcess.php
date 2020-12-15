<?php


if (isset($_COOKIE['user-id']) || isset($_SESSION['user-id'])) {
    header("location: ../../pages/insights.php");
}
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'web-assign';
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    echo 'Faild to connect MySQL' . mysqli_connect_error();
}
echo '
       <form class="sign-up-form" method="POST">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="signupUsername" type="text" placeholder="Username" name="signupUsername" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="signupPassWord" type="password" placeholder="Password" name="signupPassword" />
                    </div>
                    <input id="sign-up-form" type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
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
                </form>
                ';
