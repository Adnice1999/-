	<?php
	require_once( '../doAction/session.php' );
	if ( $power < 2 ) {
	    echo "====对不起，您权限不够, 请联系管理员添加权限====";
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
                    <a id="upLogoA">筛选区域</a><br>
                    <a>祝您种菜愉快~</a>
                    <hr>
                </center>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="upTable">
                    <div class="upTableTitle"><a>款式：</a></div>
                    <select id="a1" name="type" onchange="addOption()">
                    </select>
                </div>
                <div class="upTable">
                    <div class="upTableTitle"><a>颜色：</a></div>
                    <select id="a2" name="color">
                    </select>
                </div>
                <div class="upTable">
                    <div class="upTableTitle"><a>尺码：</a></div>
                    <select name="size">
                        <option value="3XL">3XL</option>
                        <option value="4XL">4XL</option>
                        <option value="5XL">5XL</option>
                    </select>
                </div>
                <div class="upTable">
                    <div class="upTableTitle"><a>有无后视镜：</a></div>
                    <select name="check">
                        <option value="无">无</option>
                        <option value="有">有</option>
                    </select>
                </div>
                <div class="upTable">
                    <input type="submit" class="subButton" value="开始奔放">
                </div>
            </form>
        </div>
        <div id="chooseInfo">
            <div style="width:500px;height:100px;margin-left:auto;margin-right:auto;">
                <center>
                    <a id="upLogoA">展示区域</a><br>
                    <a>祝您种菜愉快~</a>
                    <hr>
                </center>
            </div>
            <?php
				require_once('../doAction/selectDo.php');
				if($path){
				foreach($path as $key => $rwp){
					?>
            <div class="selectPic"><embed src="<?php echo $rwp['address'];?>" alt=""></div>
            <?php
				}
				}else{
				echo "没有查到相关信息";
				}
				?>
        </div>
    </div>
    </div>
    <script>
        var city = new Array;
        city[ '水晶款' ] = [ '雪花白', '雪花粉', '磨砂白', '雪花蓝', '雨滴蓝', '罗兰紫', '慕斯红', '欧洲蓝', '果绿色', '爱心红' ];
        city[ '备美套装' ] = [ '黑色', '红色' ];
        city[ '提花款' ] = [ '枣红', '藏青', '天蓝', '紫色' ];
        city[ '牛津款' ] = [ '枣红', '藏青', '紫色', '宝蓝' ];
        city[ '针织套装' ] = [ '黑色', '军绿色', '黄色', '天蓝色' ];
        city[ '针织雨披' ] = [ '宝蓝', '藏青', '枣红', '紫色' ];
        city[ '骑行套装' ] = [ '荧光绿', '经典黑', '黑拼绿', '黑拼蓝' ];
        city[ '雨裤' ] = [ '黑色' ];
        city[ '雨鞋' ] = [ '白色', '黑色', '西瓜红', '彩蓝色', '橙色' ];
        city[ '雨风衣' ] = [ '白色', '粉色', '蓝色', '黄色', '灰色', '黑色' ];

        function allCity() {
            var select1 = document.getElementById( "a1" );
            for ( var i in city ) { //这里注意遍历数组的写法
                select1.add( new Option( i, i ), null );
            }
            addOption(); // 初始化选项     
        }

        function addOption() {
            var select2 = document.getElementById( "a2" );
            var select1 = document.getElementById( "a1" ).value;
            select2.length = 0; //每次都先清空一下市级菜单  
            if ( select1 != '请选择省份' ) {
                for ( var i in city[ select1 ] ) {
                    select2.add( new Option( city[ select1 ][ i ], city[ select1 ][ i ] ), null );
                }
            } else if ( sheng == '请选择省份' ) {
                select2.length = 0;
                select2.add( new Option( "请选择城市", "请选择城市" ), null );
            }
        }
        window.onload = allCity();
    </script>
</body>

</html>