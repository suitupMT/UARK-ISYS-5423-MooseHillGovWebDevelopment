<?php
session_start();


echo ("<script>console.log('post submit value: " . $_POST['submit'] . "');</script>");
if (isset($_POST['submit'])) {
    $_SESSION["forms"] = "attempted";

    echo ("<script>console.log('post submit value: " . $_POST['submit'] . "');</script>");
    include "dbConnectWindowsAuth.php";


    $email = $_POST['E-mail'];
    $pwd = $_POST['password'];

    //Error Checking Form Entry
    //If email empty
    echo ("<script>console.log('Email var inside login.inc: " . $email . "');</script>");

    if (empty($email)) {
        $_SESSION["error"] = "empty";
        echo ("<script>console.log('error var inside email if login.inc: " . $_SESSION["error"] . "');</script>");
        header("Location: ../newLogin.php");
        exit();
        //If password empty
    } elseif (empty($pwd)) {
        //header("Location: ../newLogin.php");
        exit();
    }




    $sql = "SELECT * FROM Users Join PaymentInfo On Users.userId = PaymentInfo.userId WHERE email = '$email' or username = '$email'";
    //print "SQL: $sql\n\n </br>";

    //basic store of query -- doesn't work with row counting
    //$result = sqlsrv_query($conn, $sql);

    //this will story the query and allow to see if query is empty i.e static
    $result = sqlsrv_query(
        $conn,
        $sql,
        array(),
        array("Scrollable" => 'static')
    );
    if ($result === false) {
        //checking for failed sql statement
        //die(print_r(sqlsrv_errors(), true));
        echo "SQL query failed";
        exit();
    } elseif (sqlsrv_num_rows($result) == 0) {
        //checking to see if query is empty
        echo "incorrect email entered";

        exit();
    } elseif ($result == true) {
        //this stores the query into an array for access
        $queryArray = sqlsrv_fetch_array($result);

        //variable testing;
        //echo "</br>";
        //echo "$queryArray[1] </br>";
        //echo "$queryArray[3] </br>";
    }
    /* DEBUGGING code to test contents of SQL query 
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        print_r($row);
    } */


    $pwdCompare = $queryArray[1];
    //echo $pwdCompare;

    if ($pwdCompare !== $pwd) {
        header("location: ../login.php?error=wrongPassword");
        exit();
    } else if ($pwdCompare == $pwd) {
        session_start();
        $_SESSION["initial"] = "logged";
        $_SESSION["userId"] = $queryArray[0];
        $_SESSION["email"] = $queryArray[4];
        $_SESSION["fName"] = $queryArray[2];
        $_SESSION["lName"] = $queryArray[3];
        $_SESSION["city"] = $queryArray[5];
        $_SESSION["address"] = $queryArray[7];
        $_SESSION["CCNum"] = $queryArray[10];
        $_SESSION["CCType"] = $queryArray[11];


        header("location: ../main.php");
        exit();
    }
}
