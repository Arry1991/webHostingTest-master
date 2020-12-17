<?php
/*This file has the variable for connecting
**with mysql database.
*/
$hn = 'sql203.epizy.com';
$db = 'covid19';
$un = 'epiz_27482400';
$pw = 'aWgMLaM0W6pPD';	

//connect to the database
$conn = mysqli_connect($hn, $un, $pw, $db);

//check for connect error with the DB
//and send the error
if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
