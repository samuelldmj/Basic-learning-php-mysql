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

//select * from table_name
//where col_name = value and col_name = value;

//select * from table_name
//where col_name = value or col_name = value;

//select * from table_name
//where col_name not in (mention value);

echo "<pre>";
// $lyk = "select * from mydbtest_info where test_id = 11 and test_mark = 50 ";
// $lyk = "select * from mydbtest_info where test_id = 11 or test_mark = 50 ";

//it will display all the records but exempt the (1,7,11) 
$lyk = "select * from mydbtest_info where test_id not in (1, 7, 11) ";
$quik = mysqli_query($con, $lyk);
     while( $test_arr = mysqli_fetch_array($quik)){
        echo $test_arr['test_id']  . "<br>";
        echo $test_arr['test_name']  . "<br>";
        echo $test_arr['test_description']  . "<br>";
     }

     echo "</pre>";












?>