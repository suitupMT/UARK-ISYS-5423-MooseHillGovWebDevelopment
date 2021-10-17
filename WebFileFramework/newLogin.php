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
                <div class="v22_17">
                    <input type="text" name="E-mail" placeholder="Email...">
                </div>
                <div class="v22_18">
                </div>
                <div class="v22_24">
                    <input type="password" name="password" placeholder="Password...">
                </div>
                <div class="v22_25">

                </div>


                <div class="v22_12">
                    <button type="submit" name="submit">Sign In</button>
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

        </section>
    </div>
</body>

</html>