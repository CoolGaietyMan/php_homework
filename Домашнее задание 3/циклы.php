<?php

$i = 0;

while($i<100) {
	if(($i % 3) == 0) {
		echo $i;
	}
	$i++;
}

do {
    if(($i%2) == 0) {
        echo $i . ' - ' . 'Чётное число' . '<br/>';
    }
    else {
        echo $i . ' - ' . 'Нечётное число' . '<br/>';
    }
    $i++;
}while($i <= 10);





for ($i = 0, $S = 0, $j = 1; $i < 9; $i++, $S=$S . $j++) {
    
}

echo $S;







?>