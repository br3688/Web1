<?php 
$filename = "/sys/bus/w1/devices/28-0000084a343c/w1_slave";
$file = fopen($filename,"r");

if ( $file == false ){
echo ( "Error in opening file" );
}

$reading = fread( $file, filesize( $filename));
fclose( $file );

preg_match("/t=(.+)/", preg_split("/\n/", $reading)[1], $matches);
$degreesc = $matches[1] / 1000;
$degreesf = round($degreesc*9/5+32, "1");

echo "temperature: ";
echo $degreesf;
echo " F";

?>
