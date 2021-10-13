<?php
session_start();
//connects to the database
//pull fields from the form into php variables
if (isset($_POST['submit'])) {
    include "dbConnectWindowsAuth.php";
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['E-mail'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cc = $_POST['CC#'];
    $cctype = $_POST['CCtype'];

    // Input into staff database
    $tsql = "INSERT INTO Users(passwd, firstName, lastName, email, city, state, address)  
    VALUES (?,?,?,?,?,?,?)";

    $params = array($password, $fname, $lname, $email, $city, $state, $address);
    $stmt = sqlsrv_query($conn, $tsql, $params);
    if ($stmt) {
        echo "Row successfully inserted.\n";
    } else {
        echo "Row insertion failed.\n";
        die(print_r(sqlsrv_errors(), true));
    }

    /* Free statement and connection resources. */
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
    echo $fname . 'Your account has been created<br />';
}
