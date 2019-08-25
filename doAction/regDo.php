<?php
require_once('conn.php');
$username = $_POST[ 'username' ];
$password = $_POST[ 'password' ];
$user = $_POST[ 'user' ];
if ( $username == "" ) {
    echo "请输入账号";
}
if ( $password == "" ) {
    echo "请输入密码";
}
if ( $user == "" ) {
    echo "请输入名字";
}

$sql = "insert into user (username,password,name) values ('$username','$password','$user')";
//添加数据进数据库
$result = mysqli_query($conn,$sql);
if($result){
	$sqla = "ALTER TABLE `tongguo` ADD `$username` varchar(255) ";
	//在数据表“tongguo”里面加上独属于这个账户的字段名称，用于判定图片回收时间
	$res = mysqli_query($conn,$sqla);
	if($res){
		echo "<script>alert('注册成功');window.location.href='index.html';</script>";
	}else{
		echo "<script>alert('注册失败');window.location.href='index.html';</script>";
	}
}

?>