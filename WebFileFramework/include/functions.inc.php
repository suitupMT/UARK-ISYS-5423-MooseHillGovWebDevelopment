<?php
function emptyInputSignup($fname, $lname, $email, $pwd) {
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd)) {
        $result=true;
    }
    else {
        $result = false;
    }
    return $result;
}
