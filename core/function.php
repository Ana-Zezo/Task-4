<?php


function CheckRequestMethod()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST")
        return true;
    else
        return false;
}
function checkPostInput($input)
{
    if (isset($input))
        return true;
    else
        return false;
}

function sanitizeInput($input)
{
    return trim(htmlspecialchars(htmlentities(stripslashes($input))));
}