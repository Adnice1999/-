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
                    <a id="upLogoA">上传区域</a><br>
                    <a>祝您拍摄愉快~</a>
                    <hr>
                </center>
            </div>
            <form action="../doAction/setCheckDo.php" method="post" enctype="multipart/form-data">
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
                    <div class="upTableTitle"><a>几人：</a></div>
                    <select name="size">
						<option value="单人款">单人款</option>
						<option value="双人款">双人款</option>
<!--
						<option value="3XL">3XL</option>
						<option value="4XL">4XL</option>
						<option value="5XL">5XL</option>
-->
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
                    <input type="file" name="file[]" multiple="">
                </div>
				<div class="upTable">
                    <input type="submit" class="subButton" value="开始上传">
                </div>
            </form>
        </div>
		<div id="chooseInfo">
			 <div style="width:500px;height:100px;margin-left:auto;margin-right:auto;">
                <center>
                    <a id="upLogoA">选择须知</a><br>
                    <a>祝您上传愉快~</a>
                    <hr>
                </center>
            </div>
			<div style="width:500px;height:450px;margin-left:auto;margin-right:auto;">
				<a>
					是什么款式选择什么款式<br><br>
					是什么颜色选择什么颜色<br><br>
					单人款、单双可用统一选择单人款<br><br>
					双人款选择双人款<br><br>
					无后视镜、有无可用统一选择无后视镜<br><br>
					有后视镜选择有后视镜<br><br>
					一次只能上传一套图，切记！<br><br>
				</a>
			</div>
		</div>
    </div>
    <script>
        var city = new Array;
        city['水晶款'] = ['雪花白','雪花粉','磨砂白','雪花蓝','雨滴蓝','罗兰紫','慕斯红','欧洲蓝','果绿色','爱心红'];
        city['备美套装'] = ['黑色', '红色'];
		city['提花款'] = ['枣红','藏青','天蓝','紫色'];
		city['牛津款'] = ['枣红','藏青','紫色','宝蓝'];
		city['针织套装'] = ['黑色','军绿色','黄色','天蓝色'];
		city['针织雨披'] = ['宝蓝','藏青','枣红','紫色'];
		city['骑行套装'] = ['荧光绿','经典黑','黑拼绿','黑拼蓝'];
		city['雨裤'] = ['黑色'];
		city['雨鞋'] = ['白色','黑色','西瓜红','彩蓝色','橙色'];
		city['雨风衣'] = ['白色','粉色','蓝色','黄色','灰色','黑色'];

        function allCity() {
            var select1 = document.getElementById("a1");
            for (var i in city) { //这里注意遍历数组的写法
                select1.add(new Option(i, i), null);
            }
            addOption(); // 初始化选项     
        }
        function addOption() {
            var select2 = document.getElementById("a2");
            var select1 = document.getElementById("a1").value;
            select2.length = 0; //每次都先清空一下市级菜单  
            if (select1 != '请选择省份') {
                for (var i in city[select1]) {
                    select2.add(new Option(city[select1][i], city[select1][i]), null);
                }
            } else if (sheng == '请选择省份') {
                select2.length = 0;
                select2.add(new Option("请选择城市", "请选择城市"), null);
            }
        }
        window.onload = allCity();
    </script>
</body>

</html>