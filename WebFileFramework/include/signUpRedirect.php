<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="../css/signUpRedirect.css" rel="stylesheet" />
    <title>Logout</title>

</head>

<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo ('
<div class="v174_4">
                <span class="v211_5">Congratulations!</span>
                <span class="v211_6">You are part of the Moose Family! </span>
                <span class="v211_7">Please Login at the upcoming Login Page </span>
            </div>
            
            <div class="loader"></div>
           
');
//echo "Thank you for being a part of MooseLanding!</br>";
//echo "You are successfully logged out. Redirecting you to the Main City Page</br>";
header("refresh:4 url= ../newLogin.php"); //to redirect back to "index.php" after logging out
exit();
