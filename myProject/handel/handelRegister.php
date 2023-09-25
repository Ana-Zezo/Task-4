<?php
session_start();
include_once "../core/function.php";
include_once "../core/validation.php";
$errors = [];

if (CheckRequestMethod() && checkPostInput($_POST["name"])) {

    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    // Validation Name
    if (emptyVal($name)) {
        $errors[] = "Please Enter Name...";
    } elseif (minVal($name, 3)) {
        $errors[] = "Name is Less Than 3";
    } elseif (maxVal($name, 20)) {
        $errors[] = "Name is Greater Than 20";
    }

    // Validation Password
    if (emptyVal($password)) {
        $errors[] = "Please Enter Password...";
    } elseif (minVal($password, 3)) {
        $errors[] = "Password is Less Than 3";
    } elseif (maxVal($password, 20)) {
        $errors[] = "Password is Greater Than 20";
    }

    // Validation Email
    if (emptyVal($email)) {
        $errors[] = "Please Enter Email";
    } elseif (emailVal($email)) {
        $errors[] = "Invalid Email Format";
    }

    if (empty($errors)) {
        // Open the CSV file
        $file = fopen("../data/user-file.csv", "a+");

        // Read the existing data to determine the next available id
        $id = 1; // Initialize with a default value
        if ($file) {
            while (($row = fgetcsv($file)) !== false) {
                $id++; // Increment the id for each existing user
            }
        }

        // Create an array with user data, including the id
        $user = [$id, $name, $email, sha1($password)];

        // Write the user data to the CSV file
        fputcsv($file, $user);

        // Close the file
        fclose($file);

        $_SESSION["auth"] = [$id, $name, $email];
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        header("location:../index.php");
        die;
    } else {
        $_SESSION["errors"] = $errors;
        header("location: ../register.php");
        die;
    }
} else {
    include_once "../error404.php";
}
?>