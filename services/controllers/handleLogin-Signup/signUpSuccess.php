<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'web-assign';
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    echo 'Faild to connect MySQL' . mysqli_connect_error();
}
$options = [
    'cost' => 12,
];

if (isset($_POST["signUpsuccess"]) && $_POST["signUpsuccess"] == true) {
    $userId = uniqid();
    $userName = $_POST["username"];
    $userPassword = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);
    $query = "INSERT INTO `login`(`userId`, `signinUsername`, `signinPassword`) VALUES ('$userId' ,'$userName','$userPassword')";
    $result = mysqli_query($con, $query);

    // echo "<h1>" . $_POST["username"]  . "</h1>";
} else {
    echo "<h1> not </h1>";
}
