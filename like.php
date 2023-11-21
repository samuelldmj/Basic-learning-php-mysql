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

//like operators
//where table_name like 'x%', explanation: match any values that start with x.
//where table_name like '%x', explanation: match any values that ends with x.
//where table_name like '%x%', explanation: match any values that have x in any position.
//where table_name like '_x%', explanation: match any values that have x in the second position.
//where table_name like 'x_%', explanation: match any values that start with x and are atleast 2 characters in lenght.
//where table_name like 'x__%', explanation: match any values that start with x and are atleast 3 characters in lenght.
//where table_name like 'x%y', explanation: match any values that starts with x and ends with y.


$lyk = "select * from mydbtest_info where test_description ";


?>