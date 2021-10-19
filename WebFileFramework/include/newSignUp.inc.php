<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="../css/RedirectMessages.css" rel="stylesheet" />
    <title>SignUp</title>

</head>
<?php
session_start();
//connects to the database
//pull fields from the form into php variables
if (isset($_POST['submit'])) {
    $_SESSION["forms"] = "attempted";


    include "dbConnectWindowsAuth.php";
    $email = $_POST['E-mail'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['confPassword'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cc = $_POST['CC#'];
    $cctype = $_POST['ccType'];
    $cvv = $_POST['cvv'];



    //check for any empty fields -- begin error and validation section

    if (empty($email) || empty($fname) || empty($lname) || empty($username) || empty($pwd) || empty($cpwd) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($cc) || empty($cctype) || empty($cvv)) {

        //email portion
        if (empty($email)) {
            $_SESSION["emailEmpty"] = "error";
        } //validate email input
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["validate1"] = "error";
        } else {
            $_SESSION["emailEmpty"] = "full";
            $_SESSION["email"] = $email;
        }
        //firstname portion
        if (empty($fname)) {
            $_SESSION["fnameEmpty"] = "error";
        } elseif (ctype_alpha($fname) == false) {
            $_SESSION["validateFname"] = "error";
        } else {
            $_SESSION["fnameEmpty"] = "full";
            $_SESSION["fname"] = $fname;
        }

        //lastname portion
        if (empty($lname)) {
            $_SESSION["lnameEmpty"] = "error";
        } elseif (ctype_alpha($lname) == false) {
            $_SESSION["validateLname"] = "error";
        } else {
            $_SESSION["lnameEmpty"] = "full";
            $_SESSION["lname"] = $lname;
        }
        //username portion
        if (empty($username)) {
            $_SESSION["usernameEmpty"] = "error";
        } elseif (strlen($username) > 25) {
            $_SESSION["validateUsername"] = "error";
        } else {
            $_SESSION["usernameEmpty"] = "full";
            $_SESSION["username"] = $username;
        }
        //regular password
        if (empty($pwd)) {
            $_SESSION["passwordEmpty"] = "error";
        } elseif (strlen($pwd) < 8) {
            $_SESSION["validatePassword"] = "error";
        }
        //compare password field
        if (empty($cpwd)) {
            $_SESSION["confirmPasswordEmpty"] = "error";
        } elseif ($pwd != $cpwd) {
            $_SESSION["compare"] = "error";
        }
        //address portion
        if (empty($address)) {
            $_SESSION["addressEmpty"] = "error";
        } /*elseif (!preg_match('/[A-Za-z0-9\-\\,.]+/', $address)) {

            $_SESSION["validateAddress"] = "error";
        } */ else {
            $_SESSION["addressEmpty"] = "full";
            $_SESSION["address"] = $address;
        }
        /*
        if (empty($city)) {
        } else {
        }
        if (empty($state)) {
        } else {
        }
        if (empty($zip)) {
        } else {
        }
        if (empty($cc)) {
        } else {
        }
        if (empty($cctype)) {
        } else {
        }
        if (empty($cvv)) {
        } else {
        }
        */
        header("Location: ../newRegister.php");
        exit();
    } //end of empty


    //Need to check if email already exists;
    $sql = "SELECT * FROM Users WHERE email = '$email'";
    $result = sqlsrv_query(
        $conn,
        $sql,
        array(),
        array("Scrollable" => 'static')
    );
    if (sqlsrv_num_rows($result) > 0) {
        //checking to see if query returns a result
        $_SESSION["signError1"] = "error";
        //echo $fname . " " . $lname . '<div class="my-notify-warning">Your email has already been used //with an account<br/> 
        //Redirecting to Login Page.... Please Log In. </div>';
        //echo $fname . 'Your email account already exists<br />';
        //echo 'Redirecting to Login Page.... Please Log In.';
        //header("refresh:3; url=../newLogin.php");
        header("Location: ../newRegister.php");
        exit();
    }




    // Input into user table database
    $tsql = "INSERT INTO Users(passwd, firstName, lastName, email, city, state, address, username, zip)  
    VALUES (?,?,?,?,?,?,?,?,?)";

    $params = array($pwd, $fname, $lname, $email, $city, $state, $address, $username, $zip);
    $stmt = sqlsrv_query($conn, $tsql, $params);
    if ($stmt) {
        //echo "Row successfully inserted.\n";
    } else {
        echo "Row insertion failed.\n";
        die(print_r(sqlsrv_errors(), true));
    }
    //new SQL query to use SESSION variables and INPUT them into the PAYMENT table
    $sql = "SELECT * FROM Users WHERE email = '$email'";
    $result = sqlsrv_query(
        $conn,
        $sql,
        array(),
        array("Scrollable" => 'static')
    );
    $inputArray = sqlsrv_fetch_array($result);

    $userId = $inputArray[0];
    // Input into user table database
    $tsql = "INSERT INTO PaymentInfo(userId, CCNum, CCType, cvv)  
    VALUES (?,?,?,?)";

    $params = array($userId, $cc, $cctype, $cvv);
    $stmt = sqlsrv_query($conn, $tsql, $params);
    if ($stmt) {
        //echo "Row successfully inserted.\n";
    } else {
        echo "Row insertion failed.\n";
        die(print_r(sqlsrv_errors(), true));
    }

    /* Free statement and connection resources. */
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);

    //change redirect statement here!!!!
    echo $fname . '<div class="my-notify-success">Your Account has been Created. Redirecting to Login Page...Please Login.</br></div>';
    //echo $fname . 'Your account has been created<br />';
    //echo 'Redirecting to Login Page.... Please Log In.';
    header("refresh:3; url=../newLogin.php");
}
