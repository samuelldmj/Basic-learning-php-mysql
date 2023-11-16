<?php  
// creating a db with php

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


//iterating each col 
// echo "<pre>";
// $all_dat = "SELECT * FROM mydbtest_info";
// $que = mysqli_query($con, $all_dat);



// if ($all_dat){
//     while($user_row = mysqli_fetch_array($que)){
//         // echo var_dump($user_row) ."<br>";
//         echo $user_row['test_name'] ."<br>";
//     }
// }
// echo "<pre>";


//selecting a particular value in col
echo "<pre>";
$all_dat = "SELECT test_city, test_name, test_mark FROM mydbtest_info where test_id >= 0";
$que = mysqli_query($con, $all_dat);



if ($all_dat){
    while($user_row = mysqli_fetch_array($que)){
        // echo var_dump($user_row) ."<br>";
        echo $user_row['test_city'] ."<br>";
        echo $user_row['test_name'] ."<br>";
        echo $user_row['test_mark'] ."<br>";
    }
}
echo "<pre>";



?>