<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_care";
    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    mysqli_query($conn,"SET names 'utf8' ");
    date_default_timezone_set('Asia/Bangkok');
?>