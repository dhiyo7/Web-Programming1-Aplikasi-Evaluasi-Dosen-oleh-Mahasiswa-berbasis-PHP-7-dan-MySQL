<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "tugasweb";

$connect = mysqli_connect($host, $user, $pass , $db);
// $select = mysqli_select_db($db,$connect);

if ($connect) {
	// echo "Terhubung";
	return $connect;
}else{
	echo "Gagal";
}

?>
