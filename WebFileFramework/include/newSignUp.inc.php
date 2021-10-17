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
     f "dbConnectWindowsAuth.php";
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
    $cctype = $_POST['CCtype'];
    $cvv = $_POST['cvv'];

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

        echo $fname . " " . $lname . '<div class="my-notify-warning">Your email has already been used with an account<br/> 
        Redirecting to Login Page.... Please Log In. </div>';
        //echo $fname . 'Your email account already exists<br />';
        //echo 'Redirecting to Login Page.... Please Log In.';
        header("refresh:3; url=../login.php");
        exit();
    }
    //End of check if email exists;

    // Input into user table database
    $tsql = "INSERT INTO Users(passwd, firstName, lastName, email, city, state, address)  
    VALUES (?,?,?,?,?,?,?)";

    $params = array($password, $fname, $lname, $email, $city, $state, $address);
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
    $tsql = "INSERT INTO PaymentInfo(userId, CCNum, CCType, CVV)  
    VALUES (?,?,?, ?)";

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
    header("refresh:3; url=../login.php");
}
