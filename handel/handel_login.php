<?php

session_start();
include_once "../core/functions.php";
include_once "../core/validation.php";


if (checkRequestMethod("POST") && checkPostInput("name")) {

    foreach ($_POST as $key => $value) {

        $$key = sanitizeInput($value);
    }

    // Validation 

    if (empty($errors)) {
        $userFile = fopen("../data/user.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fgetc($userFile);
        header("location:../index.php");
        die;
    } else {
        $_SESSION["error"] = $errors;
        header("location:../register.php");
        die;
    }
}
