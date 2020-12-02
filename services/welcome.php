<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <?php include "components/header_links.php" ?>
</head>
<body>
    
    <?php include "components/navbar.php" ?>

    <div class="col-3 col-md-3"></div>
    <div class="col-6 col-md-6 container-fluid">
        <p class="text-center h3 mt-5">Welcome you to your company</p>

        <?php
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo "<p class=\"text-center h5 mt-5\">" . $message . "</p>";
            }
        ?>
    </div>
    <div class="col-3 col-md-3"></div>

    <?php include "components/footer_links.php" ?>
</body>
</html>