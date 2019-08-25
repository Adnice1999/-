<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
	<link href="../css/styleMain.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="mainBody">
        <div id="title">
			<?php include('title.php'); ?>
	</div>
	<div id="main">
		<div id="mainLeft">
			<?php include('left.php'); ?>
		</div>
		<div id="mainRight">
			<div id="upic" class="mainRightInfo">
				<iframe src="up.php" width="1000px" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
			</div>
			<div id="selectpic" class="mainRightInfo">
				<iframe src="select.php" width="1000px" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
			</div>
			<div id="checkPic" class="mainRightInfo">
				<iframe src="check.php" width="1000px" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
			</div>
			<div id="setting" class="mainRightInfo">
				<iframe src="setting.php" width="1000px" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include('footer.php'); ?>
	</div>
		</div>
</body>
</html>
