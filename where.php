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

// echo "<pre>";
//select values in the specified test id
// $whe = "select * from mydbtest_info where test_id in (7, 9, 13) ";

//select values in the specified test id, exempting (7,9,13) row
// $whe = "select * from mydbtest_info where test_id not in (7, 9, 13) ";

//
// $whe = "select * from mydbtest_info where test_mark between  50 and 70 ";

// $whe = "select * from mydbtest_info where test_mark <=  65 ";
// $quik = mysqli_query($con,$whe);
//      while( $test_arr = mysqli_fetch_array($quik)){
//         echo $test_arr['test_id'] . "<br>";
//         echo $test_arr['test_name']  . "<br>";
//      }

// echo "<pre>";



?>