<?php
    $host = "localhost";
    $user = "u826629073_avaexpressuser";
    $pass = "Fakepassword@pbg1";
    $db = "u826629073_avaexpressbase";
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Couldn't connect to host".mysqli_connect_error());
    }


?>