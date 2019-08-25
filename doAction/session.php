<?php
session_start();
require_once("conn.php");
$uid = $_SESSION['username'];//获取session
$sql = "select * from user where username = '$uid'";
//echo $sql;die();
$resultSess = mysqli_query( $conn, $sql );
while ( $row = mysqli_fetch_array( $resultSess ) ) {
	//通过session进行索引，得到该账户的姓名、权限
  	$user = $row['name'];
	$power = $row['power'];
}
?>
