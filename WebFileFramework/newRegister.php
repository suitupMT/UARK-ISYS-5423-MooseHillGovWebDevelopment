<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/newRegister.css" rel="stylesheet" />
    <title>Register</title>
</head>
<!-- Place Holder Text   Form Order
        <span class="v180_45">E-mail</span>
        <span class="v201_6">First Name</span>
        <span class="v201_12">Last Name</span>
        <span class="v195_41">Username*</span>
        <span class="v180_49">Password* (must be at 8 -12 characters long) </span>
        <span class="v180_50">Confirm password*</span>
        <span class="v180_46">Address</span>
        <span class="v195_45">City</span>
        <span class="v195_46">State Abbrev.</span>
        <span class="v195_49">Zip Code</span>
            ----Payment Info ----
        <span class="v195_51">CC#</span>
        <span class="v195_54">CC Type</span>
        <span class="v195_56">CVV</span>
        -->

<body>
    <div class="v195_4">
        <div class="v195_5"></div>
        <a href="main.php" style="text-decoration:none;">
            <div class="v195_19"></div>
        </a>

        <!-- Just Label Text -->
        <span class="v180_42">Register</span>
        <span class="v195_57">Payment Info</span>
        <span class="v195_20">Your Fast and Easy way for Everything Moose!</span>

        <section class="singup-form">
            <form action="include/newSignUp.inc.php" method="post">
                <div class="v180_43">
                    <input type="text" name="E-mail" placeholder="Email...">
                </div>
                <div class="v195_42">
                    <input type="text" name="firstName" placeholder="First Name">
                </div>
                <div class="v201_13">
                    <input type="text" name="lastName" placeholder="Last Name">
                </div>
                <div class="v195_40">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="v180_47">
                    <input type="password" name="password" placeholder="Password* (must be at 8 -12 characters long)">
                </div>
                <div class="v180_48">
                    <input type="password" name="confPassword" placeholder=" Confirm Password* ">
                </div>
                <div class="v180_44">
                    <input type="text" name="address" placeholder="Address...">
                </div>
                <div class="v201_4">
                    <input type="text" name="city" placeholder="City">
                </div>
                <div class="v195_43">
                    <input type="text" name="state" placeholder="State Abbrev.">
                </div>
                <div class="v195_48">
                    <input type="text" name="zip" placeholder="Zip Code">
                </div>
                <div class="v195_44">
                    <input type="text" name="CC#" placeholder="CC#">
                </div>
                <div class="v195_52">
                    <input type="text" name="ccType" placeholder="CC Type">
                </div>
                <div class="v195_53">
                    <input type="text" name="cvv" placeholder="CVV">
                </div>

                <!-- bottom button rectangle and submit-->
                <div class="v180_37">
                    <button type="submit" name="submit"><strong>Register</strong></button>
                </div>
            </form>
        </section>
        <!-- Register Text for button unused
        <span class="v180_38">Register</span>
        -->
        <span class="v180_39">Already have an account? <a href="newLogin.php"><u>Sign In</u><a></span>

    </div>
</body>

</html>