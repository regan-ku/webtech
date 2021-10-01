<?php
$dbconnect = mysqli_connect("localhost", "root", "hope", "KisumuUniversity");
if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
        }
else {
    echo "Connected successfully to database.";
}
