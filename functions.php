<?php
include "config.php";

$return;
function emptyFields($field){
    if($field == ""){
        $return = false;
    } else {
        $return = true;
    }

    return $return;
}