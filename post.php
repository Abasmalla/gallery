<?php

$date = date('dMYHis');
$imageData=$_POST['pic'];

if (!empty($_POST['pic'])) {
error_log("Received" . "\r\n", 3, "Log.log");

}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'images/pic'.$date.'.png', 'wb' );
fwrite($fp, $unencodedData);
fclose( $fp );

exit();
?>

