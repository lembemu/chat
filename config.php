<?php
$conn = mysqli_connect("localhost","root","","competency");

if(!$conn){
    echo "Database failed!!";
}