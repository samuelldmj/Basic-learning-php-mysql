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


// $ins_dat = "insert into mydbtest_info (test_id, test_name, test_city, test_gender, test_mark) values(7, 'baps', 'abuja', 'male', '75')";
// mysqli_query($con, $ins_dat);


//inserting incomplete data
$ins_dat = "insert into mydbtest_info (test_id, test_name, test_city) values(9, 'baps', 'abuja')";
mysqli_query($con, $ins_dat);


?>