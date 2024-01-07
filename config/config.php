<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "mycourier";
    //$db = "courier_updated";
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Couldn't connect to host".mysqli_connect_error());
    }

?>