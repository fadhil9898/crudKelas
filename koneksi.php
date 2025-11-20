<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db.kelas';
    $conn = mysqli_connect($host,$user,$pass, $db);
    if($conn){
        // echo "aman";
    }
    mysqli_select_db($conn,$db);
?>