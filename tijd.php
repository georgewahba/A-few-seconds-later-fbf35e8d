<?php 
$argv;
$pos=strpos($argv[1], "s");
if ($pos === false) {
	print_r("is geen tijd");
}
else{
	$return=substr($argv[1], 0,$pos);
	print_r( $return. "seconde");
}
