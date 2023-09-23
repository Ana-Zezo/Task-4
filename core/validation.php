<?php


function requiredVal($input)
{
    if (empty($input)) {
        return 0;
    } else
        return true;
}
function minVal($input, $length)
{
    if (strlen($input) <= $length) {
        return false;
    } else
        return 1;
}
function maxVal($input, $length)
{
    if (strlen($input) >= $length) {
        return 0;
    } else
        return 1;
}
function emailVal($input)
{
    if (filter_var(!$input, FILTER_VALIDATE_EMAIL)) {
        return 0;
    } else
        return 1;
}
