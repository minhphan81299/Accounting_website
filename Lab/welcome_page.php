<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome </title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <style>
        body {
            /* width: 100%; */
            /* height: 100%; */
            margin: 0 10px 0 10px;
        }

        .header {
            height: 100px;
            text-align: center;
            background-color: yellow;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        .w-bar {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }

        .bar {
            font-size: 20px;
            padding: 10px 20px;
            display: inline-block;
            color: white;
            text-align: center;
            text-decoration: none;
        }
        .bar:hover {
            color: white;
            background-color: royalblue;
        }

        .products-dropdown-content{
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .products-dropdown-content a {
            font-size: 20px;
            color: black;
            padding: 15px;
            display: block;
            text-decoration: none;
        }   
        .products-dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .products-dropdown:hover .products-dropdown-content {
            display: block;
        }

        .content {
            height: 370px;
            background-color: blue;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }

        .content-text {
            color: white;
            font-size: 30px;
        }

        #search-result {
            display: absolute;
        }

        footer {
            margin: 0;
            height: 140px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #FF6836;
        }

        footer p {
            color: white;
            font-size: 30px;
        }

    </style>
</head>
<body>
    <div class="header">
        <p style="color: blue; font-size: 30px;">Header</p>
    </div>
    <div class="w-bar">
        <ul>
            <li>
                <a class="bar" href="#"> Home </a>
            </li>

            <li class="products-dropdown">
                <a class="bar" href="javascript:void(0)"> 
                    Products
                    <i style="color: white;" class="fas fa-caret-down"></i>
                </a>

                
                <div class="products-dropdown-content">
                    <a href="#"> Asus </a>
                    <a href="#"> Dell </a>
                    <a href="#"> PC </a>
                </div>
            </li>

            <li>
                <a class="bar" href="index.php?page=products">Contacts</a>
            </li>

            <li>
                <?php
                    if (isset($_GET['logged'])) {
                        $logged = $_GET['logged'];
                        echo $logged;
                        // if ($logged == 'true') {
                        //     echo "<a class=\"bar\" href=\"index.php?page=logout\">Logout</a>";
                        // }
                        // else {
                        //     echo "<a class=\"bar\" href=\"index.php?page=login\">Login</a>";
                        // }
                    }
                ?>
                <a class="bar" href="index.php?page=login">Login</a>
            </li>

            <li>
                <a class="bar" href="index.php?page=register">Register</a>
            </li>
        </ul>

        <div class="row col-md-2">
            <div class="float-right input-group input-group-sm col-md-12 px-2">
                <input type="text" class="form-control" id="search-input" placeholder="Search" aria-label="Search" aria-describedby="btn-search" onkeyup="searchItems(this.value)">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="btn-search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            
        </div>
    </div>

    <div class="bg-light col-md-12 text-center" id="search-result">No suggestion!</div>

    <div class="content text-center">
        <div class="content-text">Content will be here</div>
        <?php
            if (isset($_GET['message'])) {
                $message = $_GET['message'];
                echo "<p>" . $message . "</p>";
            }
        ?>
    </div>

    <footer>
        <p> Footer </p>
    </footer>


    <script src="src.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1fb1fb2be8.js" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
    <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>