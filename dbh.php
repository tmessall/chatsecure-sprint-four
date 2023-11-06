<?php
$servername = "mysql.eecs.ku.edu";
$username = "r540r936";
$password = "REDACTED";
$dbname = "r540r936";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn == false) {
     echo "<h2>Connection Refused</h2>";
}  
