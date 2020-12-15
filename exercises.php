<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Db Test</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php
        $server_name = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "music";

        // Create connection:
        $conn = new mysqli($server_name, $username, $password, $dbname);

        // Check connection:
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully!";
        echo "<br>";

        $sql = "SELECT Id, Name, Year_of_birth, Gender FROM singers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "
                <table class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Year of birth</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <tbody>
            ";

            while($row = $result->fetch_assoc()) {
                // echo "Id: " . $row["Id"] . " Name: " . $row["Name"] . " Year of birth: " . $row["Year_of_birth"] . " Gender: " . $row["Gender"] . " ";

                echo "<tr>";
                echo "<th scope=\"row\">" . $row["Id"] . "</th>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Year_of_birth"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        // Insert Data:

        // $sql = "INSERT INTO `singers`(`Name`, `Year_of_birth`, `Gender`) VALUES (\"Huhu\", 1091, \"Male\")";

        // if ($conn->query($sql) === TRUE) {
        //     echo "Insert data successfully";
        // }
        // else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        
        // Create a new DB with at least one table:
        
        // $sql = "CREATE DATABASE new_database";

        // if ($conn->query($sql) === TRUE) {
        //     echo "Database created successfully";
        //     echo "<br>";

        //     // Create table:
        //     $sql =  "CREATE TABLE new_table (Name VARCHAR(255) NOT NULL)";

        //     if ($conn->query($sql) === TRUE) {
        //         echo "Table created successfully";
        //         echo "<br>";
        //     } 
        //     else {
        //         echo "Error creating table: " . $conn->error;
        //     }
        // } 
        // else {
        //     echo "Error creating database: " . $conn->error;
        // }

    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>