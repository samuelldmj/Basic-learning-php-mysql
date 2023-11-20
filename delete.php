<?php
$servername = "localhost";
$username = "samuelldmj";
$userpwd = "burning1234567";
$dba = "mydbtest";
$con = mysqli_connect($servername, $username, $userpwd, $dba);
if (!$con){
    die("connction failed " . mysqli_connect_error());
}else{
    echo "Database created";
}

$del = " delete from mydbtest_info where test_id = 5 ";
mysqli_query($con, $del);




?>