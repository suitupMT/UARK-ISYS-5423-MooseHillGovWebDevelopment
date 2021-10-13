<?php session_Start();
//This controls the button changes per login conditions;
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
        <span class="v119_4">Your Dreams</span>
        <!--BEGIN DROP DOWN BUTTON OBJECTS!! -->
        <span class="v123_2">
            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="#"><strong>Parks and Recreation</strong></a>
                    <a href="#"><strong>Transportation</strong></a>
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
                    <a href="#"><strong>City Council</strong></a>
                    <a href="#"><strong>Police Dept</strong></a>
                    <a href="#"><strong>Permit Info</strong></a>
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

                if ($_SESSION["initial"] != "") {
                    echo '<a href="login.php" style="text-decoration:none; color:white">Account</a>';
                } else {
                    echo '<a href="login.php" style="text-decoration:none; color:white">Log In</a>';
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