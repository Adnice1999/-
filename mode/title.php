<?php
	require_once('../doAction/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="../css/styleMain.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="titleBody">
		<div id="titleLogo">
			<img src="../images/div/logo.jpg" alt="" width="100%" height="100%"><!--这里放logo-->
		</div>
		<div id="titleInfo">
			<div class="titleName">
				<a style="color: white;">欢迎回来：<?php echo $user; ?></a>
			</div>
			<div class="titleName">
				<a style="color: white;"><?php echo $uid; ?></a>
			</div>
		</div>
	</div>
</body>
</html>