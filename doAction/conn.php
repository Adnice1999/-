<?php
	$conn = mysqli_connect("localhost","root","168168") or die('数据库链接失败');

	mysqli_select_db($conn,"biaosha");

	
	mysqli_query($conn,"set names 'utf8'");
?>