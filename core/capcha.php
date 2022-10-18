<?php
function alphanumeric_rand($num_require=8) {
	$alphanumeric = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','p','q','r','s','t','u','v','w','x','y','z',1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','N','P','Q','R','S','T','U','V','W','X','Y','Z');
	if($num_require > sizeof($alphanumeric)){
		echo "Error alphanumeric_rand(\$num_require) : \$num_require must less than " . sizeof($alphanumeric) . ", $num_require given";
		return;
	}
	$rand_key = array_rand($alphanumeric , $num_require);
	for($i=0;$i<sizeof($rand_key);$i++) $randomstring .= $alphanumeric[$rand_key[$i]];
	return $randomstring;
}
?>
