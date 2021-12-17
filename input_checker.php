<?php
function input_checker (string $input){ //'"$%&'()*+-/:;<=>?[\]^_`{|}~
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
    if (
        strpos($input, chr(34)) == false or
        strpos($input, chr(35)) == false or
        strpos($input, chr(36)) == false or
        strpos($input, chr(37)) == false or
        strpos($input, chr(38)) == false or
        strpos($input, chr(39)) == false or
        strpos($input, chr(40)) == false or
        strpos($input, chr(41)) == false or
        strpos($input, chr(42)) == false or
        strpos($input, chr(43)) == false or
        strpos($input, chr(45)) == false or
        strpos($input, chr(47)) == false or
        strpos($input, chr(58)) == false or
        strpos($input, chr(59)) == false or
        strpos($input, chr(60)) == false or
        strpos($input, chr(61)) == false or
        strpos($input, chr(62)) == false or
        strpos($input, chr(63)) == false or
        strpos($input, chr(91)) == false or
        strpos($input, chr(92)) == false or
        strpos($input, chr(93)) == false or
        strpos($input, chr(94)) == false or
        strpos($input, chr(95)) == false or
        strpos($input, chr(96)) == false or
        strpos($input, chr(123)) == false or
        strpos($input, chr(124)) == false or
        strpos($input, chr(125)) == false or
        strpos($input, chr(126)) == false or
        strpos($input, chr(127)) == false)
    {
        return true;
    }
    else{
        return false;
    }
}
?>