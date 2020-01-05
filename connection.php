<?php
$dbname = "asset_management";

$servername = "localhost";
$username = "root";
$password = "";


//ayman
$servername1 = "192.168.43.38";
$username1 = "rabiyakhan";
$password1 = "rkrock";

//muneeba
$servername2 = "192.168.43.181";
$username2 = "muneebafaheem";
$password2 = "muneebafaheem";

// create connections

$conn=mysqli_connect($servername,$username,$password,$dbname );
if ($conn) {
	echo "Connecton Open"; 
	}
else
    echo "Connection failed";

//ayman
// $conn_a=mysqli_connect($servername1,$username1,$password1,$dbname );

// if ($conn_a) {
// 	# code...
// 	echo "Connecton with remote site 1 open.."; 
	
// }
// else
// 		echo "Connection with remote site 1 failed..";



//muneeba
// $conn_b=mysqli_connect($servername2,$username2,$password2,$dbname );

// if ($conn_b) {
// 	# code...
// 	echo "Connecton with remote site 2 open.."; 
	
// }
// else
// 		echo "Connection with remote site 2 failed..";	 
?>