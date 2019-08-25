<?php
 require_once('../doAction/conn.php');
 $size = $_POST['size'];
 $type = $_POST['type'];
 $youwu = $_POST['check'];
 $color = $_POST['color'];
 $number = time();
/**
 * 链接数据库，数据注入
 */
/**
 * 组装多文件上传信息
 */
$files = [];
function getFile()
{
    $i = 0;
    foreach ($_FILES as $file) {
        if (is_string($file['name'])) {
            $files['$i'] = $file;
            $i++;
        } elseif (is_array($file['name'])) {
            foreach ($file['name'] as $k => $v) {
                $files[$i]['name'] = $file['name'][$k];
                $files[$i]['type'] = $file['type'][$k];
                $files[$i]['tmp_name'] = $file['tmp_name'][$k];
                $files[$i]['error'] = $file['error'][$k];
                $files[$i]['size'] = $file['size'][$k];
                $i++;
            }
        }
    }
    return $files;
}
/**
 * 文件上传
 * @param $fileInfo
 * @param string $upload
 * @param array $imagesExt
 * @return string
 */
function upload_file($fileInfo, $upload = "../doAction/upload", $imagesExt = ['gif', 'png', 'jpg','mp4','mov','rmvb'])
{
    $res = [];
    if ($fileInfo['error'] === 0) {
        $ext = strtolower(pathinfo($fileInfo['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $imagesExt)) {
            $res['mes'] = "文件非法类型";
        }
        if (!is_dir($upload)) {
            mkdir($upload, 0777, true);
        }
        if ($res) {
            return $res;
        }
        $fileName = md5(uniqid(microtime(true), true)) . "." . $ext;
        $destName = $upload . "/" . $fileName;
        if (!move_uploaded_file($fileInfo['tmp_name'], $destName)) {
            $res['mes'] = "文件上传失败！";
        }
        $res['mes'] = $fileInfo['name'] . "文件上传成功！";
        $res['dest'] = $destName;
        return $res;
    } else {
        switch ($fileInfo['error']) {
            case 1:
                $res['mes'] = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case 2:
                $res['mes'] = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                break;
            case 3:
                $res['mes'] = '文件只有部分被上传';
                break;
            case 4:
                $res['mes'] = '没有文件被上传';
                break;
            case 6:
                $res['mes'] = '找不到临时文件夹';
                break;
            case 7:
                $res['mes'] = '文件写入失败';
                break;
        }
        return $res;
    }
}
$files = getFile();

foreach ( $files as $fileInfo ) {
    $res = upload_file( $fileInfo );
    $address = $res['dest'];
    //注入数据库
    //echo $res[ 'mes' ];
    //var_dump( $res[ 'dest' ] ); 
    $sql = "insert into upimages (address,size,type,youwu,color,number) values('$address','$size','$type','$youwu','$color','$number')";
   	$result = mysqli_query($conn,$sql);
}
	if($result){
		echo "<script>alert('插入成功！恭喜你又成功了一次！');history.go(-1);</script>";
	}else{
		echo "<script>alert('插入失败！脸黑请联系管理员为您整容！');history.go(-1);</script>";
	}
/**
 * 数据循环解决方案没有，可以批量读取$address文件地址，但是不能批量插入数据。
 */
