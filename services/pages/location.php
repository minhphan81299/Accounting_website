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
            <span class="text-location">Locations</span>
        </div>
        <div class="location-image">
            <h1 style="color: purple;
            ">Locations</h1>
        </div>
        <div class="location-address-header">
            <span class="location-h" id="location-hcm"> Ho Chi Minh </span>
            <span class="location-h" id="location-hn"> Ha Noi </span>
        </div>
        <div class="line"></div>
        <div class="location-address-content-hcm" id="location-hcm-content">
            <h2>Ho Chi Minh City, Location</h2>
            <div class="location-hcm-container">
                <div class="location-hcm-image">
                    <div class="button-container">

                        <a href="https://www.google.com/maps/place/Grant+Thornton+(Vietnam)+Limited+-+Ho+Chi+Minh+City/@10.7992923,106.7169193,17z/data=!3m1!4b1!4m2!3m1!1s0x31752f441bd82f59:0xade55109e90785c8" class="location-button">View Map</a>
                    </div>
                </div>
                <div class="location-hcm-text">
                    <h3 class="location-hcm-text-header">
                        Office in Ho Chi Minh City

                    </h3>
                    <div class="location-hcmt-text-descript">
                        <div class="email-hcm">
                            <i style="color:purple;margin-right: 14px;" class="fas fa-envelope"></i>
                            test@gmail.com</div>
                        <div class="address-hcm"><i style="color:purple;margin-right: 14px;" class="fas fa-map-marker-alt"></i>14th Floor, Pearl Plaza, 561A Dien Bien Phu Street, Ward 25, Binh Thanh District, Ho Chi Minh City</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-address-content-hn" id="location-hn-content">
            <h2>Hanoi, Location</h2>
            <div class="location-hcm-container">
                <div class="location-hcm-image">
                    <div class="button-container">

                        <a href="https://www.google.com/maps/place/106+Ho%C3%A0ng+Qu%E1%BB%91c+Vi%E1%BB%87t,+Ngh%C4%A9a+%C4%90%C3%B4,+C%E1%BA%A7u+Gi%E1%BA%A5y,+H%C3%A0+N%E1%BB%99i,+Vietnam/@21.046936,105.7930287,17z/data=!3m1!4b1!4m2!3m1!1s0x3135ab3d9aa129f3:0x8084520689f493fc" class="location-button">View Map</a>
                    </div>
                </div>
                <div class="location-hcm-text">
                    <h3 class="location-hcm-text-header">
                        Head office in Hanoi

                    </h3>
                    <div class="location-hcmt-text-descript">
                        <div class="email-hcm">
                            <i style="color:purple;margin-right: 14px;" class="fas fa-envelope"></i>
                            test@gmail.com</div>
                        <div class="address-hcm"><i style="color:purple;margin-right: 14px;" class="fas fa-map-marker-alt"></i>18th Floor, Hoa Binh International Office Building, 106 Hoang Quoc Viet Street, Nghia Do Ward, Cau Giay District, Hanoi</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "../components/footer.php" ?>
    <?php include "../components/footer_links.php" ?>

</body>

</html>