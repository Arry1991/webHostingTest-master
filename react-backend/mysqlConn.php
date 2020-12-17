<?php
/*This file has the variable for connecting
**with mysql database.
*/
$hn = 'sql301.epizy.com';
$db = 'epiz_27371223_covid19';
$un = 'epiz_27371223';
$pw = 'OtSnD5eBpm';


//connect to the database
$conn = mysqli_connect($hn, $un, $pw, $db);

//check for connect error with the DB
//and send the error
if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
