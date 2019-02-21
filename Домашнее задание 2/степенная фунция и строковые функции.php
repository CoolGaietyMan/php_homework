<?php

function power($val, $pow) {
	$end = $val**$pow;
	return $end;
}
$end = power(5,5);
echo 'Число возведённое в степень: ' . $end;
echo '<br/>';

$lopsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum nisl mi, ut condimentum est mattis rhoncus. In lorem dolor, auctor in feugiat at, pharetra at metus. Maecenas sed sapien sit amet risus dignissim scelerisque. Duis convallis mi maximus magna tempus, vel efficitur neque ultricies. Aenean hendrerit cursus est eget laoreet. Aenean sit amet hendrerit dui, nec mollis libero. Donec felis nibh, porttitor id tristique id, consectetur eu ex. Vivamus non elit imperdiet, ultrices arcu ut, pretium eros. Aenean vehicula lorem sed risus convallis consequat.';

echo strlen($lopsum) . '<br/>';
echo strtoupper($lopsum) . '<br/>';
echo strtolower($lopsum) . '<br/>';
echo str_repeat(" ^-^ ", 10);



?>