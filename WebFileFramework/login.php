<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/signUp.css" rel="stylesheet" />
    <link href="./css/forms.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="v168_4">
        <div class="v168_28"></div>
        <div class="v168_29">
            <span class="v168_30">Log Into Your Moose Profile</span>
        </div>
        <div class="v168_44"><a href="main.php" style="text-decoration:none;"><img alt="broken" src="images/v168_44.png" width=442px height=160px></a></div>
        <section class="singup-form">

            <form action="include/login.inc.php" method="post">

                <div class="v168_50">
                    <input type="text" name="E-mail" placeholder="Email...">
                </div>
                <div class="v168_51">
                    <input type="password" name="password" placeholder="Password...">
                </div>
                <div class="v168_99">
                    <a href="signUp.php">Sign Up/Register<a>
                </div>
                <div class="v168_58">
                    <button type="submit" name="submit">Log In</button>
                </div>
            </form>
            <div class="v168_52">
                <?php
                //checking for blank fields when submit button is pushed
                /*
                if (isset($Get["error"])) {
                    if ($_Get["error"] == "emptyinput") {

                        echo "<p>Fill in all fields!</p>";
                    }
                    if ($_Get["error"] == "wrongLogin") {
                        echo "<p>Incorrect Login</p>";
                    }
                    if ($_Get["error"] == "wrongPassword") {
                        echo "<p>wrong Password entered</p>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Log in email not found</p>";
                    }
                }*/
                ?>

        </section>



    </div>
</body>

</html>