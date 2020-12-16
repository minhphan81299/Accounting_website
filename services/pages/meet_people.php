<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights</title>

    <?php include "../components/header_links.php" ?>

</head>


<body>
    <?php include "../components/navbar.php" ?>

    <div class="location-container">
        <div class="location-header">
            <div style="margin-right: 10px;" class="location-header-house">
                <i class="fas fa-house-user"></i>
            </div>
            <div style="margin:0px 10px;" class="bullet"></div>
            <span class="text-location">Meet our people</span>
        </div>
        <div class="location-image">
            <h1 style="color: purple;
            ">Meet our people</h1>
        </div>


    </div>
    <div id='search' class="search-box">
        <span style="font-size: larger;
    margin-right: 20px;
    color: white;">Search employee</span>
        <input class="search-bar1" type="text" autocomplete="off" placeholder="Search Employ by Name" />


    </div>
    <div id="output">

    </div>
    <?php include "../components/footer.php" ?>
    <?php include "../components/footer_links.php" ?>

</body>

</html>