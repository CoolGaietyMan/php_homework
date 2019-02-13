<?php

$fi_num = 6;
$se_num = 7; 


function act($th_num, $fo_num) {
	global $fi_num;
	global $se_num;

	$decision_1 = ($fi_num + $se_num) * ($th_num - $fo_num);
	$decision_2 = ($th_num % $fo_num) - ($se_num % $fi_num);
	$decision_3 = ($fo_num - $th_num) / ($fi_num + $se_num);
	$decision_4 = ($se_num * $fo_num) + ($fi_num * $th_num);
	return $decision_1;
	return $decision_2;
	return $decision_3;
	return $decision_4;
}

$decision_1 = act(4,3);
$decision_2 = act(16,7);
$decision_3 = act(8,10);
$decision_4 = act(5,9);
echo $decision_1 . '<br/>' . $decision_2 . '<br/>' . $decision_3 . '<br/>' . $decision_4 . '<br/>';

?>