<?php
    // Connect to database:
    $conn = new mysqli("127.0.0.1", "root", "", "music");

    // Check connection:
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>


<?php
    if (isset($_GET['page'])) {
        // if ($_GET['page'] == 'products') {
        //     $page = $_GET['page'];
        //     include $page . '.php';
        // }
        // elseif ($_GET['page'] == 'login') {
        //     $page = $_GET['page'];
        //     include $page . '.php';
        // }

        // elseif ($_GET['page'] == 'register') {
        //     $page = $_GET['page'];
        //     include $page . '.php';
        // }
        $page = $_GET['page'];
        header("Location:$page" . ".php");
    }

    // Test function input:
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['submit_btn'])) {
        $submit_btn = $_POST['submit_btn'];
        
        // Register:
        if ($submit_btn == 'register') {
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
                    // echo "Location:welcome_page.html?message=$message";
                    header("Location:welcome_page.php?message=$message");
                }
                else {
                    $message = "Welcome back " . $username;
                    header("Location:welcome_page.php?logged=true?message=$message");

                    // Delete cookie:
                    setcookie($cookie_name, "", time() - 86400);
                }
            }
            else {
                $message =  "Invalid username or password!";
                header("Location:login.php?message=$message");
                // echo "Error" . $sql . "<br>" . $conn->error;
            }
        }
    }

    // Logout:

    // Search products:
    if (isset($_GET['search_result'])) {
        $search_result = $_GET['search_result'];

        // Connect to database:
        $conn = new mysqli("127.0.0.1", "root", "", "music");

        // Check connection:
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Product_name FROM products";
        $query = $conn->query($sql);
        $result = "";
        while ($row = $query->fetch_assoc()) {
            if ($search_result != "") {
                $search_result = strtolower($search_result);
                $len = strlen($search_result);

                if (stristr($search_result, substr($row["Product_name"], 0, $len))) {
                    if ($result === "") {
                        $result = "<a href='#'>" . $row["Product_name"] . "</a>";
                        echo $result;
                    }
                    else {
                        $result = "<br /><a href='#'>" . $row["Product_name"] . "</a>";
                        echo $result;
                    }
                }
            }
        }

        if ($result === "") {
            echo "No suggestion!";
        }
    }
?>

<?php
    $conn->close();
?>