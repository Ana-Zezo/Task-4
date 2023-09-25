<?php


function emptyVal($input)
{
    if (empty($input)) {
        return true;
    } else
        return false;
}


function minVal($input, $length)
{
    if (strlen($input) < $length) {
        return true;
    } else
        return false;
}

function maxVal($input, $length)
{
    if (strlen($input) > $length) {
        return true;
    } else
        return false;
}

// Validation Email 

function emailVal($emil)
{
    if (!filter_var($emil, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else
        false;

}