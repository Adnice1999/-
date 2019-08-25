<?php
require_once('../doAction/session.php');
require_once( '../doAction/conn.php' );
$userData = $uid;
$size = $_POST[ 'size' ];
$type = $_POST[ 'type' ];
$youwu = $_POST[ 'check' ];
$color = $_POST[ 'color' ];
$data = time();
$sqla = "select dataChange from setting where type = timeout";
$resultData = mysqli_query($conn,$sqla);
while ( $row = mysqli_fetch_array( $resultData ) ) {
  	$dataDay = $row['dataChange'];
}
$dataChange = $dataDay * 86400;
$dataGet = $data - $dataChange;
$sql = "select * from tongguo where size = '$size' and type = '$type 'and youwu = '$youwu' and color = '$color' and '$userData' < '$dataGet'";
$pathA = mysqli_query( $conn, $sql );
$array = array();
if ( $pathA && is_object( $pathA ) ) {
    while ( $rowA = mysqli_fetch_assoc( $pathA ) ) {
        $array[] = $rowA;
    }
}else{
    echo "====没有符合条件的素材===="
}
$i = 0;
$numberAcc = '' . $array[ $i ][ 'number' ];
//echo $numberAcc;
$sqlb = "select address from tongguo where size = '$size' and type = '$type 'and youwu = '$youwu' and color = '$color' and number = '$numberAcc'";
$path = mysqli_query( $conn, $sqlb );

$sqlc = "update tongguo set dataTime = '$data' where number = '$numberAcc'";
//echo $sqlc;
mysqli_query($conn,$sqlc);
?>

<!--<div class="selectPic"><embed src="<?php /*echo $rwp['address'];*/?>" alt=""></div>-->
