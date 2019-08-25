<?php
require_once( 'conn.php' );
require_once( 'checkDo.php' );
$check = $_POST[ 'shenhe' ];
$sqlb = "select * from upimages where number = '$number'";
$res = mysqli_query( $conn, $sqlb );
$array = array();
if ( $res && is_object( $res ) ) {
    while ( $rowA = mysqli_fetch_assoc( $res ) ) {
        $array[] = $rowA;
    }
}
$i = 0;
$sizeAcc = '' . $array[ $i ][ 'size' ];
$typeAcc = '' . $array[ $i ][ 'type' ];
$youwuAcc = '' . $array[ $i ][ 'youwu' ];
$colorAcc = '' . $array[ $i ][ 'color' ];
/**echo $sqlb. "<br>";
echo ( $sizeAcc ). "<br>";
echo $typeAcc. "<br>";
echo $youwuAcc. "<br>";
echo $colorAcc. "<br>";
echo $number . "<br>";
echo $check. "<br>";*/

$sqld = "select address from upimages where size = '$sizeAcc' and type = '$typeAcc 'and youwu = '$youwuAcc' and color = '$colorAcc' and number = '$number'";
$ress = mysqli_query( $conn, $sqld );
if ( $check == "1" ) {
    if ( $ress ) {
        foreach ( $ress as $key => $values ) {
            $address = $values[ 'address' ];
            // echo $address."<br>";
            $sqle = "insert into tongguo(address,size,type,youwu,color,number) values ('$address','$sizeAcc' , '$typeAcc ', '$youwuAcc' , '$colorAcc' , '$number')";
            mysqli_query($conn,$sqle);
			//echo $sqle."<br>";
        }
    }
}
if ( $check == "2" ) {
    if ( $ress ) {
        foreach ( $ress as $key => $values ) {
            $address = $values[ 'address' ];
            //echo $address."<br>";
            $sqlf = "insert into filed(address,size,type,youwu,color,number) values ('$address','$sizeAcc' , '$typeAcc ', '$youwuAcc' , '$colorAcc' , '$number')";
			mysqli_query($conn,$sqlf);
				//echo $sqlf."<br>";
        }
    }
}
$sqlg = "delete from upimages where number = '$number'";
$delete = mysqli_query($conn,$sqlg);
if($delete){
	echo "<script>alert('审核成功！');location.href = '".$_SERVER["HTTP_REFERER"]."';</script>";
}else{
	echo "<script>alert('审核失败！请勿继续工作！请联系管理员处理');location.href = '".$_SERVER["HTTP_REFERER"]."';</script>";
}
?>