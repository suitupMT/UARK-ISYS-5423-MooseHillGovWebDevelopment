<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="../css/RedirectMessages.css" rel="stylesheet" />
    <title>Logout</title>

</head>

<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo '<div class="my-notify-success">Thank you for being a part of MooseLanding!</br>You are successfully logged out. Redirecting you to the Main City Page</div>';
//echo "Thank you for being a part of MooseLanding!</br>";
//echo "You are successfully logged out. Redirecting you to the Main City Page</br>";
header("refresh:4 url= ../main.php"); //to redirect back to "index.php" after logging out
exit();
