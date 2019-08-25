	<?php
	require_once('../doAction/session.php');
	if($power < 3){
		echo "====对不起，您权限不够,请联系管理员添加权限====";
		exit();
	}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv='refresh' content='5'/>
    <title></title>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="upBody">
        <div style="width:1000px;height:100px;">
            <center>
                <a id="upLogoA">审核区域</a><br>
                <a>-----请选择“通过”或者“不通过”-----</a>
                <form action="../doAction/checkMove.php" method="post">
                    <select name="shenhe">
                        <option value="0">--请选择--</option>
                        <option value="1">通过</option>
                        <option value="2">不通过</option>
                    </select>
                    <input type="submit" value="提交">
                </form>
                <hr>
            </center>
            <div style="width: 1000px;height: 400px;">
                <?php
						require_once('../doAction/checkDo.php');
						if ( $resultAdd ) {
    					foreach ( $resultAdd as $key => $v ) {
        				$address = $v[ 'address' ];
        				?>
               			 <div class="checkPic"><embed src="<?php echo $address;?>" alt=""></div>
                		<?php
						}
								}	
					?>
            </div>

        </div>
    </div>
</body>

</html>