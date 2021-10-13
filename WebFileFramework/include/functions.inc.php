
<?php

session_start();

include "dbConnectWindowsAuth.php";
function emptyInputSignup($fname, $lname, $email, $pwd)
{
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputLogin($email, $pwd)
{
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
/// this needs changed to sql server info
function emailExists($conn, $email, $pwd)
{
    $query = "Select * From Users Where email = '$email'";
    $result = sqlsrv_query($query, $conn);
    $num = sqlsrv_num_rows($result);

    if ($num != 1) {
        header("locaiton: ../singUp.php?error=stmtfailed");
        exit();
    }
    //$email = $_REQUEST['email'];

    sqlsrv_free_stmt($result);
    sqlsrv_close($conn);
    /*
    if (!mysqli_stmt_prpare($stmt, $sql)) {
        head("locaiton: ../singUp.php?error=stmtfailed");
        exit();
    }
    */
}

function loginUser($conn, $email, $pwd)
{
    //does the sql query to the database
    //puts database results into an array of answers labeled $emailExists
    $emailExists =  emailExists($conn, $email, $email);
    //throws error 
    if ($emailExists === false) {
        header("locaiton: ../login.php?error=wrongLogin");
        exit();
    }
    //validates password sign in
    $pwdCompare = $emailExists["passwd"];
    //use if hashing password;
    //$checkPwd = password_verify($pwd, $pwdCompare);

    if ($pwdCompare === $pwd) {
        header("location: ../login.php?error=wrongPassword");
        exit();
    } else if ($pwdCompare === true) {
        session_start();
        $_SESSION["initial"] = "logged";
        $_SESSION["userId"] = $emailExists["userId"];
        $_Session["email"] = $emailExists["email"];
        $_Session["fName"] = $emailExists["firstName"];
        $_Session["lName"] = $emailExists["lastName"];
        header("locaiton: ../main.php");
        exit();
    }
    //testing code
    function changeSession()
    {
        $_SESSION["initial"] = "changed";
        header("location: ..main.php");
    }
}
