<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "web-assign";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "SELECT * FROM employer WHERE name LIKE '%" . $search . "%'
    ";
} else {
    $query = "SELECT * FROM employer
    ";
}
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    echo '  <div class="employee-container">';
    while ($row = mysqli_fetch_array($result)) {
        echo '   
    
      
        <div class="employee-item">
            <h2 class="employee-name">' . $row['name'] . '</h2>
            <h3 class="employee-number">' . $row['number'] . '
            <div style="margin-top: 10px;">
            <i style="margin-right:10px" class="fas fa-envelope"></i>
            <i class="fas fa-user-tie"></i></div></h3>
           
            <div class="employee-image"></div>
            </div>';
    };
    echo '</div>';
}
