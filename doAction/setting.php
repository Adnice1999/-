<?php
	require_once('conn.php');
	$dataChange = $_POST['dataChange'];
	
	$sql = "update setting set dataChange = '$dataChange' where	type = 'timeout'";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "<script>alert('设置成功');history.go(-1);</script>";
	}else{
		echo "<script>alert('设置失败，请联系管理员');history.go(-1);</script>";
	}

?>