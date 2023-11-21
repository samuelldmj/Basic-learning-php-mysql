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

// $db = "create database mydbtest";
// mysqli_query($con, $db);

//creating a table in db
// $tb = "create table mydbtest_info(
//     test_id int(10) NOT NULL,
//     test_name varchar(100),
//     test_city varchar(100),
//     test_gender varchar(100),
//     test_mark int(50),
//     primary key(test_id)
// )";
// mysqli_query($con, $tb);

// //adding a new column to a table
// $new_col = "alter table mydbtest_info add test_description varchar(100)";
// mysqli_query($con, $new_col);


//dropping or deleting a column
// $del_col = "alter table mydbtest_info drop test_country";
// mysqli_query($con, $del_col);

// //modifying data
// $mod_dat = "alter table mydbtest_info modify test_city varchar(15)";
// mysqli_query($con, $mod_dat);

//removing data from table
// $tru_dat ="trauncate table mydbtest_info ";
// mysqli_query($con, $tru_dat);

//renaming table 
// $ren_tab = " rename table mydbtest_info to dbtest_info";
// mysqli_query($con, $ren_tab);

?>