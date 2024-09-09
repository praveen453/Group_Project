<?php
    $hostname = "localhost";
    $dbuser = "root";
    $dbname = "green_mart";
    $dbpassword = "";

    $conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

?>