<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="../../css/index_style.css" />
<link rel="stylesheet" href="../../css/reponsive.css" />

<style>
    .bg-light {
        background-color: #f8f9fa;
    }

    .purple-text {
        color: #6f42c1;
        font-size: 18px;
    }

    .space {
        padding: 10px;
        font-size: 1.1rem;
        line-height: 2.0rem;
    }

    .home1,
    .home2,
    .home3,
    .home4 {
        display: flex;
        height: 500px;
    }

    .home1-right,
    .home2-right {
        color: black;
    }

    .home1-left,
    .home1-right,
    .home2-right,
    .home2-left,
    .home3-right,
    .home3-left {
        background-color: #4F2D7F;
        color: white;
        padding-left: 50px;
        padding-right: 50px;
        display: flex;
        padding-top: 106px;
        flex-direction: column;
    }

    .home1-right,
    .home2-right {
        background-color: white;
        color: black;

    }

    .home3-left {
        background-color: #F5F3F2;
        color: black;
        flex-basis: 50%;
    }

    .home3-right {
        background-image: url('../imgs/index-img.webp');
        flex-basis: 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .home1-header {
        /* margin-bottom: 40px; */
        font-size: 20px;

    }

    .home1-text {
        margin: 23px 0px;
        font-size: 49px;
    }

    footer {
        background: #4F2D7F;
        margin-left: 0;
        margin-right: 0;
        padding: 128px 0 96px 0;
        color: #fff;
        font-size: 1rem;
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
        font-weight: 400;
        line-height: 1.4;
    }

    .footer-row {
        margin-left: -16px;
        margin-right: -16px;
    }

    footer .social-media-float {
        padding-left: 0;
        padding-right: 0;
    }

    .social-media {
        font-size: 1.8rem;
        color: #fff;
        width: 100%;
        margin: 0;
    }

    .social-media-list {
        list-style-type: none;
        display: table;
        width: 100%;
    }

    .social-media-list li {
        display: table-cell;
    }


    .link-list {
        padding-left: 10px;
        padding-right: 10px;
    }

    .footer-menu-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .footer-menu-list li {
        padding: 8px 1px;
    }

    .footer-menu-list li a {
        color: #fff;
        font-size: 1.0rem;
        font-family: inherit;
    }

    .column-title {
        color: #fff;
        font-size: 1.3rem;
        line-height: 2.3rem;
        font-family: inherit;
    }

    .footer-container {
        display: flex;
    }

    .footer-content {
        flex-basis: 60%;
        margin-right: 20px;
        display: flex;
        justify-content: space-around;
    }

    .footer-logo {
        flex-basis: 30%;

    }

    .solution-container {
        display: flex;
    }

    .navbar {
        width: 100% !important;
        position: static;
    }

    .solution-header {
        flex-basis: 25%;
    }

    .solution-descript {
        flex-basis: 50%;
    }

    .solution-logo {
        flex-basis: 25%;
        height: 50vh;
        padding-left: 10px;
        padding-top: 10px;
        padding-right: 10px background-color: #fff;
    }

    .location-container {
        background-color: #F5F3F2;

    }

    .location-header {
        width: 100vw;
        height: 100px;
        display: flex;
        /* justify-content: start; */
        align-items: center;
        padding-left: 50px;
    }

    .fa-house-user {
        color: purple;

    }

    .bullet {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: purple;
    }

    .location-image {
        height: 200px;
        width: 100vw;
        background-image: url('../imgs/banner-1.webp');
        background-size: inherit;
        background-repeat: no-repeat;
        background-position: center right;
        background-color: white;
        display: flex;
        align-items: center;
        padding-left: 50px;
    }

    .location-address-header {
        padding-left: 50px;
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .location-h {
        height: 200px;
        width: 100vw;
        color: #4f2d7f;
        cursor: pointer;
        font-size: 1.3rem;
        margin-right: 100px;

    }

    .line {
        height: 1px;
        width: 80vw;
        background-color: #4F2D7F;
        border-top: #4f2d7f;
        margin: auto;
    }

    .location-address-content-hcm,
    .location-address-content-hn {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 70px;
    }

    .location-hcm-container {
        padding-top: 50px;
        display: flex;
    }

    .location-hcm-text-header {
        margin-bottom: 35px;
    }

    .email-hcm {
        margin-bottom: 21px;
    }

    .location-hcm-text {
        width: 300px;
        margin-left: 27px;
    }

    .location-hcm-image {
        width: 280px;
        height: 280px;
        background-image: url('../imgs/map-ldn-2.webp');
        background-repeat: no-repeat;
        position: relative;
        background-size: contain;
        z-index: 1;
    }

    .location-button {
        background-color: #de002e;
        border: 2px solid #de002e;
        position: relative;
        cursor: pointer;
        height: 46px;
        width: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        text-decoration: none;
        color: white;

    }

    .location-button::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 100%;
        transition: all .3s;
        background-color: white;
        z-index: -1;
    }

    .location-button:hover {
        color: #de002e;

    }

    .location-button:hover:before {
        width: 100%;
    }

    .button-container {
        position: absolute;
        bottom: 33px;
        left: 161px;
    }

    #location-hn-content {
        display: none;
        opacity: 1;
        animation: fade 1s;
    }

    #location-hcm-content {
        opacity: 1;
        animation: fade 1s;
    }

    .search-box {
        background-color: #4F2D7F;
        height: 100px;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #output {
        background-color: #F5F3F2;
        padding-top: 71px;
    }

    .search-bar1 {
        width: 70%;
        height: 44%;
        border-radius: 10px;
        border: none;
    }

    .search-bar1:focus {
        outline: none;
    }

    .employee-container {

        display: flex;
        flex-wrap: wrap;

        padding-left: 100px;
        /* padding-right: 50px; */
    }

    .employee-item {
        height: 300px;
        background-color: white;
        margin-right: 20px !important;
        flex-basis: 20%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        margin-right: 5px;
        margin-bottom: 40px;
    }

    .employee-name {
        flex-basis: 10%;
        font-size: 15px;
        color: purple;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .employee-number {
        flex-basis: 16%;
        font-size: 13px;
        color: purple;
        display: flex;

        align-items: center;
        flex-direction: column;
        margin-bottom: 15px;
    }

    .employee-item:hover {
        transform: translateY(-10px);
        cursor: pointer;
    }

    .employee-image {
        flex-basis: 74%;
        width: 100%;
        background-image: url('../imgs/avatar1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;

    }
</style>