<?php
function form_calculator($num1, $num2, $type)
	{
		$num1 = intval($num1);
		$num2 = intval($num2);
		
		if ($type == '+')
			$res = $num1 + $num2;
		elseif ($type == '-')
			$res = $num1 - $num2;
		elseif ($type == '*')
			$res = $num1 * $num2;
		elseif ($type == '/')
		{
			if ($num2 == 0)
				return 'Делить на 0 нельзя.';
			else
				$res = $num1 / $num2;
		}
		else
			return '....';
		
		return $num1 .' '. $type .' '. $num2 .' = '. $res;
	}

/*if(isset($_POST['x']) && isset($_POST['y']))
$result = $_POST['x'] + $_POST['y'];
$result = $_POST['x'] - $_POST['y'];
$result = $_POST['x'] * $_POST['y'];
 
if($_POST['y'] !== 0) {
  $result = $_POST['x'] / $_POST['y'];
}else{
  exit('Деление на ноль');
}*/

?>
    <html>

    <head>
        <title>Калькулятор</title>
    </head>

    <body>
        <form action="" method="post">
            <input type="text" name="num1" size="" value="0">
            <select name="calculator">
                <option selected value="+" name="type">+</option>
                <option value="-" name="type">-</option>
                <option value="*" name="type">*</option>
                <option value="/" name="type">/</option>
            </select>
            <input type="submit" value="+" name="type" />
            <input type="submit" value="-" name="type" />
            <input type="submit" value="*" name="type" />
            <input type="submit" value="/" name="type" />
            <input type="text" name="num2" size="" value="0">
            <input type="submit" value="=" />
            <?php echo form_calculator($_POST['num1'], $_POST['num2'], $_POST['type']);  ?>
        </form>
    </body>

    </html>