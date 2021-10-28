<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="../css/logout.css" rel="stylesheet" />
    <title>Logout</title>

</head>

<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo ('
<div class="v174_4">
                <span class="v211_5">Thanks for being part of the Moose!</span>
                <span class="v211_6">You have successfully logged out. </span>
                <span class="v211_7">You will be redirected to the City main page soon. </span>
            </div>
            
            <div class="loader"></div>
           
');
//echo "Thank you for being a part of MooseLanding!</br>";
//echo "You are successfully logged out. Redirecting you to the Main City Page</br>";
header("refresh:4 url= ../index.php"); //to redirect back to "index.php" after logging out
exit();
