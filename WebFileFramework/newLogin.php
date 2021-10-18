<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/newLogin.css" rel="stylesheet" />

    <title>Login The Moose</title>
</head>

<body>
    <div class="v180_36">
        <div class="v180_55"></div><span class="v22_9">Sign In </span>


        <section class="singup-form">

            <form action="include/login.inc.php" method="post">
                <?php

                //echo ("<script>console.log('check Session forms: " . $_SESSION["forms"] . "');</script>");
                if ($_SESSION["forms"] !== "attempted") {
                    //echo ("<script>console.log('Error var inside Post if statement: " . $error . "');</script>");
                    echo '<div class="v22_17">
                    <input type="text" name="E-mail" placeholder="Email or Username...">
                    </div>';
                } else {

                    //echo ("<script>console.log('Error var inside else if statement: " . $error . "');</script>");
                    if ($_SESSION["error"] == "empty") {
                        echo
                        '<div class="v22_17" style="border: 2px solid red;">
                        <input type="text" name="E-mail" placeholder="Value was empty..">
                        </div>';
                    }
                    session_destroy();
                }



                echo '<div class="v22_24">
                    <input type="password" name="password" placeholder="Password...">
                </div>';

                echo (')
                <div class="v22_12">
                    <button type="submit" name="submit">Sign In</button>
                </div> ');


                /*
                if (!isset($_GET['password'])) {
                    $pwd = $_GET['password'];
                    echo '<div class="v22_24"><input type="password" name="password" placeholder="Password..."> 
                    value="' . $pwd . '" </div>';
                } else {
                    echo '<div class="v22_24">
                    <input type="password" name="password" placeholder="Password...">
                </div>';
                }
                */
                ?>

                <!--
                <div class="v22_17">
                    <input type="text" name="E-mail" placeholder="Email or Username...">
                </div>
                <div class="v22_18">
                </div>
                <div class="v22_24">
                    <input type="password" name="password" placeholder="Password...">
                </div>
            -->
                <div class="v22_25">
                </div>



            </form>

            <div class="v22_30"><input type="checkbox" class="checkbox-round"></div>
            <div class="v22_31">
                Remember me
            </div>
            <div class="v22_32"></div>





            <!-- logo -->
            <a href="main.php" style="text-decoration:none;">
                <div class="v180_94"></div>
            </a>

            <span class="v22_13">
                <a href="newRegister.php">Don’t have an account? Register<a>
            </span>
            <span class="v22_14">Forgot Password?</span>
            <span class="v182_9">Your Fast and Easy way for Everything Moose!</span>
            <!--Error message validation displays -->
            <?php
            /*
            if (!isset($_GET['login'])) {
                exit();
            } else {
                $loginCheck = $_GET['login'];

                if ($loginCheck == "emptyEmail") {
                    echo ' <div class="v22_17" style ="border: 2px solid red;">
                    <input type="text" name="E-mail" placeholder="Email or Username was empty...">
                </div>
                     ';

                    exit();
                }
                if ($loginCheck == "emptyPwd") {
                    echo '
                    <div class="v22_24" style="border: 2px solid red;">
                    <input type="password" name="password" placeholder="Password was empty...">
                    </div> ';

                    exit();
                }
            }
                */
            ?>








        </section>
    </div>
</body>

</html>