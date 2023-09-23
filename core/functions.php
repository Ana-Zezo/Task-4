<?php

function checkRequestMethod($method)
{
    if ($_SERVER["REQUEST_METHOD"] == $method) {
        return 1;
    } else
        return false;
}

function checkPostInput($input)
{
    if (isset($_POST[$input])) {
        return 1;
    } else
        return 0;
}

function sanitizeInput($data)
{
    // $data = htmlspecialchars($data);
    // $data = htmlentities($data);
    // $data = stripslashes($data);
    // $data = trim($data);
    // return $data;
    return trim(htmlspecialchars(htmlentities(stripslashes($data))));
    /*
    Anthor Sol
    */
}

function redirect($path)
{
    header("location: $path");
}