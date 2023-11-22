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

//you can use update key to change the values in a row or space
// $upD = "update mydbtest_info set test_gender = 'male', test_mark = '80', test_name = 'zaps' where test_id = 9";
// mysqli_query($con, $upD);


//  $upD = "update mydbtest_info set test_description = 'great and noble student' where test_id = 0";
//  $upD = "update mydbtest_info set test_description = 'asir is faisal jali who is instructor for the' where test_id = 1";
//  $upD = "update mydbtest_info set test_description = 'patrick is an intelligent students who knows how to read' where test_id = 3";
//  $upD = "update mydbtest_info set test_description = ' faisal jali is an intelligent students who knows how play' where test_id = 5";
//  $upD = "update mydbtest_info set test_description = 'let go and eat bread' where test_id = 7";
//  $upD = "update mydbtest_info set test_description = 'ali is a student who has the ability to work online' where test_id = 9";
//  $upD = "update mydbtest_info set test_description = 'again faisal is a developer and an online instructor' where test_id = 11";
// //  $upD = "update mydbtest_info set test_description = 'zebi is a developer and an online instructor who ' where test_id = 13";
//  mysqli_query($con, $upD);



?>