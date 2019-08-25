# -
电商评价部门买家秀管理系统（初稿，思路如此，期待各位大佬参与补全）
一、系统背景
本系统是立足于标鲨电子商务有限公司评价部素材管理制度缺失的前提下，根据PCDA成本循环方法进行分析、总结出来的产物。本系统因刚刚诞生，存在一系列未解决的问题以及一些BUG，为此，需要后续的开发人员进行不断的维护甚至重构。

本系统采用：
环境：			PHP7.0.1 + MYSQL5.5 + APACHE2.4
环境软件：		PHPWAMP(http://www.phpwamp.com)
编写软件：		Dreamwere + VS code
数据库软件：	NAVICAT

原生PHP；

编写：Adnice WU	美工：Adnice WU	部署：Adnice WU	维护：？？？

二、环境部署
网络部署。部署流程：
1、本地服务器需要采用固定IP；
2、路由器WAN口需要固定IP；
3、设置路由器端口映射（既虚拟服务器功能）；

本地服务器部署。部署流程：
1.下载PHPWAMP IN3软件（或PHPWAMP studio，网址见上文）；
2.下载NAVICAT数据库管理软件；
3.打开PHPWAMP IN3，开启设置服务器环境为PHP7.0.1 + MYSQL5.5 + APACHE2.4，尔后开启服务器；
4.将源码文件放入服务器根目录（地址：PHPWAMP_IN3\wwwroot）；
5.打开NAVICAT，新建数据库 “biaosha”，运行“biaosha.sql”文件；
6.访问网站，部署成功。

三、软件制作初衷
志在解决标鲨电子商务公司评价部门对素材管理制度、系统的缺失而造成的成本损耗过大的问题。


四、文件目录解析
index.html--------------------------------------------------------------------登陆界面
reg.html-----------------------------------------------------------------------注册界面
Css------------------------------------------------------------------------------样式表文件夹
|-login.css------------------------------------------------------------------登陆样式表
|-main.css------------------------------------------------------------------主样式表
|-styleMain.css------------------------------------------------------------次样式表
DoAction----------------------------------------------------------------------后台程序库
	|-upload--------------------------------------------------------------------素材存储区
	|-checkDo.php------------------------------------------------------------审核程序
	|-checkMove.php--------------------------------------------------------上传文件程序
	|-conn.php-----------------------------------------------------------------数据库程序
	|-loginDo.php-------------------------------------------------------------登陆程序
	|-regDo.php----------------------------------------------------------------注册程序
	|-selectDo.php------------------------------------------------------------引用素材程序
	|-session.php--------------------------------------------------------------临时数据程序
	|-setCheckDo.php--------------------------------------------------------素材上传程序
	|-setting.php---------------------------------------------------------------全局设置程序
Images													
	|-div
		|-footer.png
		|-logo.jpg
		|-logreg.jpg
		|-mainLeft.png
		|-title.png
Mode	--------------------------------------------------------------------------页面模块
	|-body.php-----------------------------------------------------------------主体页面框架
	|-check.php	---------------------------------------------------------------审核页面
		|-footer.php	---------------------------------------------------------------底部框架
		|-left.php-------------------------------------------------------------------左部导航框架
		|-select.php----------------------------------------------------------------素材引用页面
		|-setting.php---------------------------------------------------------------全局设置页面
		|-title.php------------------------------------------------------------------头部框架
		|-up.php--------------------------------------------------------------------文件上传框架



index.html
这是一个登陆界面，也相当于本系统的一个门户界面。链接的登陆程序是doAction/loginDo.php。
变量$username指用户账号，$password指用户密码，采用$_POST方法进行魔术传递。

LoginDo.php
这是一个登陆程序，index.html传递$username,$password变量至此进行处理，若登陆成功后会储存session。

Session.php
这是一个session临时程序，主要作用在于储存session加载用户信息、权限等。$user指用户姓名，$power指用户权限。

reg.html
这是注册页面，链接注册程序doAction/regDo.php，与登陆界面相同，区别在于新增变量$user指用户姓名。

regDo.php
这是注册程序，当用户注册成功后，程序会自动在数据表“tongguo”里面添加一个独属于该用户的字段，用以判定图片回收机制。

body.php
这是这个系统的一个主门户框架，采用include与iframe来加载模块文件。该文件css样式文件在styleMain.css。

left.php
这是该系统的导航目录，类似于NAV。

title.php
这是该系统的头部框架，里面包含了变量$user即账号使用者姓名以及账号。

footer.php
这是该系统的尾部文件，申明版权、作者及其他事项。

up.php
这是上传文件功能模块，链接上传程序setChankDo.php以及checkMove.php
变量$type指款式，$color指颜色，$size指单双人款式，$check只有无后视镜。


setCheckDo.php
这是直接处理图片上传程序，里面包含了图片上传函数，请谨慎修改！
如果更新程序，请一定要确认本函数里面的上传路径与select.php里面的路径打印是否成功的问题！

checkMove.php
这是围绕setCheckDo.php所简历的图片处理函数，让上传的图片移动到upload文件夹中。

check.php
这是图片审核页面模块，用于管理人员对图片进行审核。链接审核程序checkDo.php，meta标签属性设置为页面每5秒刷新。

checkDo.php
这是图片审核程序。

select.php
这是图片引用模块，此模块为该系统的核心模块，链接selectDo.php。
该模块将PHP嵌套进html中，利用foreach循环来展示图片。

selectDo.php
这是图片引用程序，变量$type指款式，$color指颜色，$size指单双人款式，$check只有无后视,$dataDay指图片回收期限（目前分为三天、七天、两周、一月四个档次，采用unix时间为判定标准，一天的unix时间为86400）。$data是当前的时间，用$data减去$dataDay得到差值$dataChange，然后利用“上次引用时间”是否小于$dataChange来判定该组图片是否可以使用。

setting.php  &&  setting.php
这是全局设置页面及程序，主要设置变量$dataDay，即素材循环时间。
