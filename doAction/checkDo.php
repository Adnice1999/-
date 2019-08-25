<?php
require_once( '../doAction/conn.php' );
$sqla = "select * from upimages group by type,size,color,youwu,number having count(number)> 1";
$result = mysqli_query( $conn, $sqla );
$arr = array();
if ( $result && is_object( $result ) ) {
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        $arr[] = $row;
    }
}
$i = 0;
$cum = count( $arr );
$number = '' . $arr[ $i ][ 'number' ];
$sql = "select address from upimages where number = $number";
$resultAdd = mysqli_query( $conn, $sql );
?>
   