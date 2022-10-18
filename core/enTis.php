<?php 
function enTis($str){
	$data = iconv('UTF-8','TIS-620',$str);
	return $data;
}
?>