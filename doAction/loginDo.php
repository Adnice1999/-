<?php
	session_start();
	require_once('conn.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == ""){
		echo "<script>alert('请输入账号！');history.go(-1);</script>";
	}
	if($password == ""){
		echo "<script>alert('请输入密码！');history.go(-1);</script>";
	}
	
	$sql = "select username,password from user where username = '$username' and password = '$password'";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) > 0){
		$_SESSION['username'] = $username;
		echo "<script>alert('欢迎回来，标鲨的小伙伴！');window.location.href='../mode/body.php';</script>";
	}else{
		echo "<script>alert('登陆失败，请联系管理员！');history.go(-1);</script>";
	}

?>