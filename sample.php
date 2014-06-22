<?php
$del_id = 5;
$counter = 10;
$arr = array();
	$net = $del_id+1;
	for($i=$net; $i<=$counter;$i++){
		// $arr = array("$i");
		array_push($arr, $i-1);
		// $t++;
	}
	
	echo "dcdc ". implode(",",$arr);


?>