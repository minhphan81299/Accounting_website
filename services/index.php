<?php
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        header("Location:$page" . ".php");
    }
?>

<!-- Connect DB -->
<?php
    // Connect to database:
    $conn = new mysqli("127.0.0.1", "root", "", "music");

    // Check connection:
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<?php
    // Test function input:
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Register
    if (isset($_POST['submit_btn'])) {
        $submit_btn = $_POST['submit_btn'];
        
        // Register:
        if ($submit_btn == 'register') {
            // Check input:
            $first_name = test_input($_POST['first_name']);
            $last_name = test_input($_POST['last_name']);
            $username = test_input($_POST['username']);
            $password = test_input($_POST['pass']);

            // Add users to database:
            $sql = "INSERT INTO users (first_name, last_name, username, pass) VALUES ('$first_name', '$last_name', '$username', '$password')";
            // echo $sql;
            $query = $conn->query($sql);

            if ($query === TRUE) {
                echo "Register Successfully!";

                $message = "Register successfully";
                header("Location:insights.php?message=$message");
            }
            else {
                echo "Error" . $sql . "<br>" . $conn->error;
            }
        }

        // Login:
        elseif ($submit_btn == 'login') {
            $username = test_input($_POST['username']);
            $password = test_input($_POST['pass']);

            $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
            $query = $conn->query($sql);
            $result = mysqli_fetch_array($query);

            if (is_array($result)) {

                // Cookie:
                $cookie_name = str_replace(" ", "",$username);
                if (!isset($_COOKIE[$cookie_name])){
                    setcookie($cookie_name, time() + (300 * 1), "/");
                    $message = 'Welcome to our page! ' . $username;
                }
                else {
                    $message = "Welcome back " . $username;
                    // Delete cookie: No need!
                    // setcookie($cookie_name, "", time() - 86400);
                }
                
                // Session:

                // Start the session
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['username'] = str_replace(" ", "",$username);
                
                // Redirect page:
                header("Location:insights.php?message=$message");
            }
            else {
                $message =  "Invalid username or password!";
                header("Location:login.php?message=$message");
                // echo "Error" . $sql . "<br>" . $conn->error;
            }
        }
    }

    
?>