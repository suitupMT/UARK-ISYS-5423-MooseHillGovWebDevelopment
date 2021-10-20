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
                <?php
                //loads inital sign up screen -- nothing special
                if ($_SESSION["forms"] != "attempted") {
                    echo ('
                <div class="v180_43">
                    <input type="text" name="E-mail" placeholder="Email...">
                </div> ');
                    echo ('
                <div class="v195_42">
                    <input type="text" name="firstName" pattern="[A-Za-z]*" placeholder="First Name">
                </div> 
                ');
                    echo ('
                <div class="v201_13">
                    <input type="text" name="lastName" placeholder="Last Name">
                </div>
                ');
                    echo ('
                <div class="v195_40">
                    <input type="text" name="username" placeholder="Username">
                </div> 
                ');
                    echo ('
                <div class="v180_47">
                    <input type="password" name="password" placeholder="Password* (must be at least 8 characters long)">
                </div> 
                ');
                    echo ('
                <div class="v180_48">
                    <input type="password" name="confPassword" placeholder=" Confirm Password* ">
                </div> 
                ');
                    echo ('
                <div class="v180_44">
                    <input type="text" name="address" placeholder="Address...">
                </div> 
                ');
                    echo ('
                <div class="v201_4">
                    <input type="text" name="city" placeholder="City">
                </div> 
                ');
                    echo ('
                <div class="v195_43">
                    <input type="text" name="state" placeholder="State Abbrev.">
                </div> 
                ');
                    echo ('
                <div class="v195_48">
                    <input type="text" name="zip" placeholder="Zip Code">
                </div> 
                ');
                    echo ('
                <div class="v195_44">
                    <input type="text" name="CC#" placeholder="CC# no spaces">
                </div> 
                ');
                    echo ('
                <div class="v195_52">
                    <input type="text" name="ccType" placeholder="CC Type ex: MC, VS">
                </div>
                ');
                    echo ('
                <div class="v195_53">
                    <input type="text" name="cvv" placeholder="CVV">
                </div>
                ');
                }
                // -- close initial sign up form with no errors

                //----------------------begin forms error checking


                //email------------------------------------------------------------
                //validaes proper email format--------------------------------------
                if ($_SESSION["validate1"] == "error") {
                    echo ('
                <div class="v180_43" style="border: 2px solid red;">
                    <input type="text" name="E-mail" placeholder="Enter a valid E-mail...">
                </div> ');
                }
                //validates already existing email
                if ($_SESSION["signError1"] == "error") {
                    echo ('
                <div class="v180_43" style="border: 2px solid red;">
                    <input type="text" name="E-mail" placeholder="Email already exists with an account...">
                </div> ');
                }
                //validates field left empty
                elseif ($_SESSION["emailEmpty"] == "error") {
                    echo ('
                <div class="v180_43" style="border: 2px solid red;">
                    <input type="text" name="E-mail" placeholder="Email left empty...">
                </div> ');
                }
                //saves value for other form error-user convenience
                elseif ($_SESSION["emailEmpty"] == "full") {
                    echo ('
                <div class="v180_43">
                    <input type="text" name="E-mail" value ="' . $_SESSION["email"] . '">
                </div> ');
                }

                //firstName-----------------------------------------------------
                //--------------------------------------------------------------
                if ($_SESSION["validateFname"] == "error") {
                    echo ('
                <div class="v195_42" style="border: 2px solid red;">
                    <input type="text" name="firstName" placeholder="Enter a real First Name...">
                </div> 
                ');
                } elseif ($_SESSION["fnameEmpty"] == "error") {
                    echo ('
                <div class="v195_42" style="border: 2px solid red;">
                    <input type="text" name="firstName" placeholder="First Name left empty...">
                </div> 
                ');
                } elseif ($_SESSION["fnameEmpty"] == "full") {
                    echo ('
                <div class="v195_42" >
                    <input type="text" name="firstName" value = "' . $_SESSION["fname"] . '">
                </div> 
                ');
                }
                //lastName--------------------------------------------------------------
                //-----------------------------------------------------------------------
                if ($_SESSION["validateLname"] == "error") {
                    echo ('
                        <div class="v201_13" style="border: 2px solid red;">
                            <input type="text" name="lastName" placeholder="Enter a real Last Name">
                        </div>
                    ');
                } elseif ($_SESSION["lnameEmpty"] == "error") {
                    echo ('
                        <div class="v201_13" style="border: 2px solid red;">
                            <input type="text" name="lastName" placeholder="Last Name left empty..">
                        </div>
                ');
                } elseif ($_SESSION["lnameEmpty"] == "full") {
                    echo ('
                        <div class="v201_13">
                            <input type="text" name="lastName" value = "' . $_SESSION["lname"] . '">
                        </div>
                ');
                }
                //username------------------------------------------------------------
                //--------------------------------------------------------------------
                if ($_SESSION["validateUsername"] == "error") {
                    echo ('
                         <div class="v195_40" style="border: 2px solid red;">
                             <input type="text" name="username" placeholder="Username cannot exceed 25 characters">
                        </div> 
                        ');
                } elseif ($_SESSION["usernameEmpty"] == "error") {
                    echo ('
                         <div class="v195_40" style="border: 2px solid red;">
                             <input type="text" name="username" placeholder="Username left empty...">
                        </div> 
                        ');
                } elseif ($_SESSION["usernameEmpty"] == "full") {
                    echo ('
                         <div class="v195_40">
                             <input type="text" name="username" value = "' . $_SESSION["username"] . '">
                        </div> 
                        ');
                }
                //--------------------------------------------------------------------------
                //Password----------------------------------
                //-------------------------------------------
                if ($_SESSION["validatePassword"] == "error") {
                    echo ('
                <div class="v180_47" style="border: 2px solid red;">
                    <input type="password" name="password" placeholder="Password error, must be at least 8 characters long! ">
                </div> 
                ');
                }
                if ($_SESSION["passwordEmpty"] == "error") {
                    echo ('
                <div class="v180_47" style="border: 2px solid red;">
                    <input type="password" name="password" placeholder="Password was left empty">
                </div> 
                ');
                } else {
                    echo ('
                <div class="v180_47">
                    <input type="password" name="password" placeholder="Password* (must be at least 8 characters long)">
                </div> 
                ');
                }
                //Confirm Password --------------------------------------------------------- 
                //--------------------------------------------------------------------------
                if (($_SESSION["compare"] == "error" && $_SESSION["passwordEmpty"] != "error")) {
                    echo ('
                <div class="v180_47" style="border: 2px solid red;">
                    <input type="password" name="password" placeholder="Two different passwords typed">
                </div> 
                ');
                    echo ('
                <div class="v180_48" style="border: 2px solid red;">
                    <input type="password" name="confPassword" placeholder=" Confirm Password error typed">
                </div> 
                ');
                } elseif ($_SESSION["confirmPasswordEmpty"] == "error") {
                    echo ('
                <div class="v180_48" style="border: 2px solid red;">
                    <input type="password" name="confPassword" placeholder=" Conf. Password was left empty">
                </div> 
                ');
                } else {
                    echo ('
                <div class="v180_48">
                    <input type="password" name="confPassword" placeholder=" Confirm Password* ">
                </div> 
                ');
                }
                //Address ---------------------------------------------
                //-----------------------------------------------------
                if ($_SESSION["validateAddress"] == "error") {
                    echo ('
                <div class="v180_44" style="border: 2px solid red;">
                    <input type="text" name="address" placeholder="Enter a valid Address...">
                </div> 
                ');
                } elseif ($_SESSION["addressEmpty"] == "error") {
                    echo ('
                <div class="v180_44" style="border: 2px solid red;">
                    <input type="text" name="address" placeholder="Address left empty...">
                </div> 
                ');
                } elseif ($_SESSION["addressEmpty"] == "full") {
                    echo ('
                <div class="v180_44">
                    <input type="text" name="address" value = "' . $_SESSION["address"] . '">
                </div> 
                ');
                    //  echo ("<script>console.log('error var inside session address: " . $_SESSION["address"] . "');</script>");
                }
                //City--------------------------------------------------
                //-------------------------------------------------------
                if ($_SESSION["validateCity"] == "error") {
                    echo ('
                <div class="v201_4" style="border: 2px solid red;">
                    <input type="text" name="city" placeholder="Enter a valid City name">
                </div> 
                ');
                } elseif ($_SESSION["cityEmpty"] == "error") {
                    echo ('
                <div class="v201_4" style="border: 2px solid red;">
                    <input type="text" name="city" placeholder="City was left empty">
                </div> 
                ');
                } elseif ($_SESSION["cityEmpty"] == "full") {
                    echo ('
                <div class="v201_4">
                    <input type="text" name="city" value = "' . $_SESSION["city"] . '">
                </div> 
                ');
                }
                //State------------------------------------------------------
                //---------------------------------------------------------
                if ($_SESSION["validateState"] == "error") {
                    echo ('
                <div class="v195_43" style="border: 2px solid red;">
                    <input type="text" name="state" placeholder="State Abbrev. are two letters">
                </div> 
                ');
                } elseif ($_SESSION["stateEmpty"] == "error") {
                    echo ('
                <div class="v195_43" style="border: 2px solid red;">
                    <input type="text" name="state" placeholder="State Abbrev. was left empty">
                </div> 
                ');
                } elseif ($_SESSION["stateEmpty"] == "full") {
                    echo ('
                <div class="v195_43">
                    <input type="text" name="state" value = "' . $_SESSION["state"] . '">
                </div> 
                ');
                }
                //Zip----------------------------------------------------
                //-------------------------------------------------------
                if ($_SESSION["validateZip"] == "error") {
                    echo ('
                <div class="v195_48" style="border: 2px solid red;">
                    <input type="text" name="zip" placeholder="Enter a valid Zip Code">
                </div> 
                ');
                } elseif ($_SESSION["zipEmpty"] == "error") {
                    echo ('
                <div class="v195_48" style="border: 2px solid red;">
                    <input type="text" name="zip" placeholder="Zip Code was left empty">
                </div> 
                ');
                } elseif ($_SESSION["zipEmpty"] == "full") {
                    echo ('
                <div class="v195_48">
                    <input type="text" name="zip" value = "' . $_SESSION["zip"] . '">
                </div> 
                ');
                }

                //CC#---------------------------------------------------
                //-------------------------------------------------------
                if ($_SESSION["validateCc"] == "error") {
                    echo ('
                <div class="v195_44" style="border: 2px solid red;">
                    <input type="text" name="CC#" placeholder="CC# has 16 digits no spaces">
                </div> 
                ');
                } elseif ($_SESSION["ccEmpty"] == "error") {
                    echo ('
                <div class="v195_44" style="border: 2px solid red;">
                    <input type="text" name="CC#" placeholder="CC# was left empty">
                </div> 
                ');
                } elseif ($_SESSION["ccEmpty"] == "full") {
                    echo ('
                <div class="v195_44">
                    <input type="text" name="CC#" value = "' . $_SESSION["cc"] . '">
                </div> 
                ');
                }

                //CCType----------------------------------------------------
                //-----------------------------------------------------------
                if ($_SESSION["validateCctype"] == "error") {
                    echo ('
                <div class="v195_52" style="border: 2px solid red;">
                    <input type="text" name="ccType" placeholder="CC Type ex: MC,AX,VS">
                </div>
                ');
                } elseif ($_SESSION["cctypeEmpty"] == "error") {
                    echo ('
                <div class="v195_52" style="border: 2px solid red;">
                    <input type="text" name="ccType" placeholder="CC Type was left empty">
                </div>
                ');
                } elseif ($_SESSION["cctypeEmpty"] == "full") {
                    echo ('
                <div class="v195_52">
                    <input type="text" name="ccType" value = "' . $_SESSION["cctype"] . '">
                </div>
                ');
                }

                //CVV-------------------------------------------
                //----------------------------------------------
                if ($_SESSION["validateCvv"] == "error") {
                    echo ('
                <div class="v195_53" style="border: 2px solid red;">
                    <input type="text" name="cvv" placeholder="CVV is 3 digit code">
                </div>
                ');
                } elseif ($_SESSION["cvvEmpty"] == "error") {
                    echo ('
                <div class="v195_53" style="border: 2px solid red;">
                    <input type="text" name="cvv" placeholder="CVV was empty">
                </div>
                ');
                }
                //no full display variable -- security number -- no form save

                session_destroy();
                ?>
                <div class="v180_37">
                    <button type="submit" name="submit"><strong>Register</strong></button>
                </div>
            </form>



            <!-- bottom button rectangle and submit-->



        </section>






        <!-- Register Text for button unused
        <span class="v180_38">Register</span>
        -->
        <span class="v180_39">Already have an account? <a href="newLogin.php"><u>Sign In</u><a></span>

    </div>
</body>

</html>