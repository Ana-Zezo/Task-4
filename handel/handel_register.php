<?php
session_start();
include_once "../core/functions.php";
include_once "../core/validation.php";
$errors = [];

if (checkRequestMethod("POST") && checkPostInput("name")) {

    foreach ($_POST as $key => $value) {

        $$key = sanitizeInput($value);
    }



    // Validation 
    // name ==> required , min-char => 3 , max-char => 20
    if (!requiredVal($name)) {
        $errors[] = "Name is empty";
    } elseif (!minVal($name, 3)) {
        $errors[] = "Name Must be Greater Than 3";
    } else if (!maxVal($name, 20)) {
        $errors[] = "Name Must Be Less Than 20";
    }
    //




    if (!requiredVal($email)) {
        $errors[] = "Email is empty";
    } elseif (!emailVal($email)) {
        $errors[] = "Please type a Valid Email";
    }


    // name ==> required , min-char => 6 , max-char => 20
    if (!requiredVal($password)) {
        $errors[] = "Password is empty";
    } elseif (!minVal($password, 6)) {
        $errors[] = "password Must be Greater Than 6";
    } else if (!maxVal($password, 20)) {
        $errors[] = "password Must Be Less Than 20";
    }
    //



    //





    if (empty($errors)) {
        $userFile = fopen("../data/user.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($userFile, $data);
        $_SESSION["auth"] = [$name, $email];
        header("location:../index.php");
        die;
    } else {
        $_SESSION["error"] = $errors;
        header("location:../register.php");
        die;
    }
} else {
    echo "Emsh Yala";
}
