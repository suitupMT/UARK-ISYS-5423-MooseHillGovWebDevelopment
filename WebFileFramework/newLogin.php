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

                if ($_SESSION["error1"] == "emptyUsername") {
                    echo '<div class="v22_17" style="border: 2px solid red;">
                        <input class = "error" type="text" name="E-mail" placeholder="Username/Email Value was Empty..">
                        </div>';
                } elseif ($_SESSION["error3"] == "Email does not exist") {
                    echo '<div class="v22_17" style="border: 2px solid red;">
                        <input type="text" name="E-mail" placeholder="Incorrect Email/Username..">
                        </div>';
                } else {
                    echo '<div class="v22_17">
                    <input type="text" name="E-mail" placeholder="Email or Username...">
                    </div>';
                }

                if ($_SESSION["error2"] == "emptyPwd") {
                    echo '<div class="v22_24" style="border: 2px solid red;">
                        <input type="password" name="password" placeholder="Password Value was Empty...">
                        </div>';
                } elseif ($_SESSION["error4"] == "wrong password") {
                    echo '<div class="v22_24" style="border: 2px solid red;">
                        <input type="password" name="password" placeholder="Wrong Password...">
                        </div>';
                } else {
                    echo '<div class="v22_24">
                    <input type="password" name="password" placeholder="Password...">
                    </div>';
                }
                // }
                //breaks cookies after refresh should always be right above sign in button
                session_destroy();
                //sign in button do not move into any if statements
                echo ('
                        <div class="v22_12">
                            <button type="submit" name="submit">Sign In</button>
                        </div> ');

                ?>
                <div class="v22_25">
                </div>
            </form>

            <div class="v22_30"><input type="checkbox" class="checkbox-round"></div>

            <div class="v22_31">
                Remember me
            </div>
            <div class="v22_32"></div>

            <!-- logo -->
            <a href="index.php" style="text-decoration:none;">
                <div class="v180_94"></div>
            </a>

            <span class="v22_13">
                <a href="newRegister.php">Don’t have an account? Register<a>
            </span>
            <span class="v22_14">Forgot Password?</span>
            <span class="v182_9">Your Fast and Easy way for Everything Moose!</span>
        </section>
    </div>
</body>

</html>