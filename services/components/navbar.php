<div class="navbar" id="navbar">
    <div class="navbar__header container" id="navbar__header">
        <div class="white-block">

        </div>
        <div class="logo" id="logo">
            <img class="navbar__header-img" src="https://www.grantthornton.com.vn/ResourcesVI/images/default-sticky-image.png" alt="">
            <div class="logo-text" id="logo-text">


                Minh Phan

            </div>
        </div>
        <div class="search-bar">
            <div class="language">
                <a href="" class="language-text" id='appear'> EN</a>
                <a href="" class="language-text" id='disappear1'>JA</a>
                <a href="" class="language-text" id='disappear2'>VI</a>
                <a href="" class="language-text" id='disappear'>EN2</a>
                <div class="login">
                    <i style="margin-right:20px" class="fas fa-user"></i>
                    <?php
                    if (isset($_SESSION['userId'])) {
                        echo ' <div style="margin-right:20px" class="welcome-user">
                        ' . $_SESSION["userName"] . '
                    </div>
                    <a style="text-decoration:none" href="../controllers/handleLogin-Signup/logout.php">Log Out</a>';
                    } else {
                        echo '<a style="text-decoration:none"href="login-signup.php">Log In</a>';
                    } ?>

                </div>

            </div>

        </div>

    </div>

    <ul style="list-style-type:none;" class="navbar__footer container" id="navbar__footer">
        <li class="nav-list">
            <a href="../components/member.php?page=insights" class="navbar__footer-text">Insights</a>

        </li>
        <li class="nav-list" id="services">
            <a href="" class="navbar__footer-text">Services</a>


        </li>
        <li class="nav-list">
            <a href="" class="navbar__footer-text">Meet our people</a>
        </li>
        <li class="nav-list">
            <a href="" class="navbar__footer-text">Locations</a>
        </li>
        <li class="nav-list">
            <a href="" class="navbar__footer-text">Careers</a>
        </li>


    </ul>

</div>
<div class="navbar-mobile">
    <div class="navbar-mobile-contaniner">
        <div class="logo" id="logo">
            <img class="navbar__header-img" src="https://www.grantthornton.com.vn/ResourcesVI/images/default-sticky-image.png" alt="">
            <div class="logo-text" id="logo-text">


                Minh Phan

            </div>

        </div>
        <div class="login">
            <i style="margin-right:20px;font-size:20px" class="fas fa-user"></i>
            <?php
            if (isset($_SESSION['userId'])) {

                echo ' <div style="margin-right:20px" class="welcome-user">
                        ' . $_SESSION["userName"] . '
                    </div>';
            } else {
                echo '<a class="login-link" href="login-signup.php">Log In</a>';
            } ?>
            <i style="font-size:30px" class="menu-mobile-icon fas fa-bars" id="menu-open"></i>
        </div>


    </div>
    <div class="menu-mobile-list" id="menu-mobile-list">
        <ul style="list-style-type:none;" class="nav-lists-mobile" id="">
            <li class="nav-list-mobile">
                <a href="../components/member.php?page=insights" class="navbar__footer-text-mobile">Insights</a>

            </li>
            <li class="nav-list-mobile" id="services">
                <div style="cursor:pointer;" class="service-item-mobile" id="service-item-mobile">Services</div>

                <ul style="list-style-type:none;" class="service-mobile" id="service-mobile">
                    <li class="service-mobile-item">
                        <a class="service-link-mobile" href="../components/member.php?page=solutions">Solutions for your business</a>
                    </li>
                    <li class="service-mobile-item">
                        <a class="service-link-mobile" href="">Audit and Assurance Services</a>
                    </li>
                    <li class="service-mobile-item">
                        <a class="service-link-mobile" href="">Tax Services</a>
                    </li>

                </ul>
            </li>
            <li class="nav-list-mobile">
                <a href="" class="navbar__footer-text-mobile">Meet our people</a>
            </li>
            <li class="nav-list-mobile">
                <a href="" class="navbar__footer-text-mobile">Locations</a>
            </li>
            <li class="nav-list-mobile">
                <a href="" class="navbar__footer-text-mobile">Careers</a>
            </li>
            <?php
            if (isset($_SESSION['userId'])) {
                echo '
            <li class="nav-list-mobile">
                <a href="logout.php" class="navbar__footer-text-mobile">Log Out</a>
            </li>';
            } else {
                echo '<li class="nav-list-mobile">
                <a href="login-signup.php" class="navbar__footer-text-mobile">Log In</a>
            </li>';
            }
            ?>

        </ul>
    </div>
</div>

<div class="drop-down" id="drop-down" style="width: 100%;">
    <div class="drop-right" id="drop-right">

        <a href="../components/member.php?page=solutions" class="drop-right-item" id="drop-right-item1">

            Solutions for your business

        </a>
        <a href="" class="drop-right-item" id="drop-right-item2">

            Audit and Assurance Services

        </a>
        <a href="" class="drop-right-item" id="drop-right-item3">

            Tax Services

        </a>


    </div>
    <div class="drop-left">

        <div id="drop-left-item1">
            <!-- <h2 class="drop-left-header" id="drop-left-header">
                Solutions for your business
            </h2>
            <div class="drop-left-item" id="drop-left-item">
                <a href="">Service Item 1</a>
            </div> -->
        </div>

        <div id="drop-left-item2">
            <h2 class="drop-left-header" id="drop-left-header">
                Audit and Assurance Services
            </h2>
            <div class="drop-left-item" id="drop-left-item">
                <a href="../components/member.php?page=audit_services">Audit Services</a>
                <a href="../components/member.php?page=audit_quality">Audit Quality</a>
                <a href="../components/member.php?page=audit_approach">Audit Approach</a>
            </div>

        </div>

        <div id="drop-left-item3">
            <h2 class="drop-left-header" id="drop-left-header">
                Tax Services
            </h2>
            <div class="drop-left-item" id="drop-left-item">
                <a href="../components/member.php?page=licensing_services">Licensing Services</a>
                <a href="../components/member.php?page=international_tax_planning">International Tax Planning</a>
            </div>

        </div>
    </div>


</div>