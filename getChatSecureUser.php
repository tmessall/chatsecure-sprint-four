<?php
include 'dbh.php';

$sql = "SELECT * FROM chatSecureUsers";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
	echo "<h1>";
	echo mysqli_num_rows($result);
	echo " Rows</h1>";
	$row = $result->fetch_array(MYSQLI_NUM);
	echo "<h1> Username: ";
	echo $row[0];
	echo "</h1>";

	echo "<h1> Password: ";
	echo $row[1];
	echo "</h1>";

	echo "<h1> Email: ";
	echo $row[2];
	echo "</h1>";

	echo "<h1> Security Question: ";
	#echo $row[3];
	echo "</h1>";


	

}else{
	echo "<h1>No Result</h1>";
}

?>
