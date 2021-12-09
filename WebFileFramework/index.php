<?php session_Start();
//This controls the button changes per login conditions;
error_reporting(E_ALL ^ E_WARNING);
$_SESSION['initial'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
    <title>MooseHideLanding</title>

</head>

<body>

    <!-- Background object -->
    <div class="v117_9">
        <!--LOGO OBJECT-->
        <div class="v118_7"></div>
        <!-- bottom text -->
        <span class="v119_3">The Town of</span>
        <span class="v119_4">Look at this new stuff here</span>
        <!--BEGIN DROP DOWN BUTTON OBJECTS!! -->
        <span class="v123_2">
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="https://www.figma.com/proto/EbNdGzO5W83HSjXzOvuWDr/Moose-Hide-Landing?page-id=130%3A5&node-id=318%3A38&viewport=241%2C48%2C0.24&scaling=min-zoom&starting-point-node-id=130%3A6"><strong>Parks and Recreation</strong></a>
                    <a href="transport_landing.html"><strong>Transportation</strong></a>
                    <a href="#"><strong>Recycling</strong></a>
                    <a href="#"><strong>Airport Info</strong></a>
                    <a href="#"><strong>Public Safety</strong></a>
                </div>
            </div>
        </span>
        <span class="v123_3">
            <div class="dropdown">
                <button class="dropbtn">Government</button>
                <div class="dropdown-content">
                    <a href="citycouncil.html"><strong>City Council</strong></a>
                    <a href="https://www.figma.com/proto/ZUkOwzLrfBNLxyOk0EmwVH/Police-Department?scaling=min-zoom&page-id=0%3A1&starting-point-node-id=2%3A2&node-id=2%3A2"><strong>Police Dept</strong></a>
                    <a href="https://www.figma.com/proto/rt3KXm3MWF0M3i9WIWbuAd/Permit-Page?node-id=2%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A2"><strong>Permit Info</strong></a>
                </div>
            </div>
        </span>
        <span class="v123_4">
            <div class="dropdown">
                <button class="dropbtn">Careers</button>
                <div class="dropdown-content">
                    <a href="#"><strong>Find Job Openings</strong></a>
                    <a href="#"><strong>Post Jobs</strong></a>
                    <a href="#"><strong>Volunteer Opportunities</strong></a>
                </div>
            </div>

        </span>
        <span class="v123_5">
            <div class="dropdown">
                <button class="dropbtn2">Covid-19 Help</button>
                <div class="dropdown-content">
                    <a href="covid-19.html"><strong>Local Information</strong></a>
                </div>
            </div>
        </span>
        <div class="v126_2"></div>
        <span class="v126_3">
            <div>
                <?php

                if (empty($_SESSION["initial"])) {
                    echo '<a href="newLogin.php" style="text-decoration:none; color:white">Log In</a>';
                } else {
                    echo '<div class="dropdown">
                <button class="dropbtn3">Account</button>
                <div class="dropdown-content">
                    <a href="user_profile.html"><strong>Profile</strong></a>
                    <a href="include/logout.inc.php"><strong>Log Out</strong></a>
                </div>
            </div>';
                    //echo '<a href="login.php" style="text-decoration:none; color:white">Log In</a>';
                }
                ?>
            </div>
        </span>
        <div class="v126_13"></div>
        <div class="name"></div>
        <span class="v126_15">Search the Town of Moose Hide Landing</span>
    </div>
</body>

</html>
