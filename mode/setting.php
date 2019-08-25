	<?php
	require_once('../doAction/session.php');
	if($power < 4){
		echo "====对不起，您权限不够,请联系管理员====";
		exit();
	}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="upBody">
        <div id="chooseTable">
            <div style="width:400px;height:100px;">
                <center>
                    <a id="upLogoA">全局设置</a><br>
                    <a>--设置区域，请根据实际合理设置--</a>
                    <hr>
                </center>
            </div>
            <form action="../doAction/setting.php" method="post">
                <div class="upTable">
                    <div class="upTableTitle"><a>回收期限：</a></div>
    					<select name="dataChange">
							<option value="3">三天</option>
							<option value="7">七天</option>
							<option value="14">两周</option>
							<option value="30">一月</option>
					</select>
                </div>
				<div class="upTable">
                    <input type="submit" class="subButton" value="设置">
                </div>
            </form>
        </div>
		<div id="chooseInfo">
			 <div style="width:500px;height:100px;margin-left:auto;margin-right:auto;">
                <center>
                    <a id="upLogoA">设置须知</a><br>
                    <a>~祝您工作愉快~</a>
                    <hr>
                </center>
            </div>
			<div style="width:500px;height:450px;margin-left:auto;margin-right:auto;">
				<a>
					全局设置目前只开放一项设置<br><br>
					其他需要配置的设置根据实际情况添加<br><br>
					需要添加请联系QQ2461185807<br><br>
					WX：w2461185807<br><br>
					<br><br>
					别问为什么不设置多一点<br><br>
					没时间<br><br>
					想不出来<br><br>
				</a>
			</div>
		</div>
    </div>
</body>

</html>