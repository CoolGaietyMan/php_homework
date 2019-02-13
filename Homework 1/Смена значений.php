<?php 
        $title_main = "Документ";
        $h1_main = "Заголовок";
        $p_main = "2019";
        $a = 5;
        $b = '05';
        var_dump($a == $b); // Почему true?
        var_dump((int)'012345'); // Почему 12345?
        var_dump((float)123.0 === (int)123.0); // Почему false?
        var_dump((int)0 === (int)'hello, world'); // Почему true?

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title_main; ?>
    </title>
</head>

<body>
    <h1>
        <?php echo $h1_main; ?>
    </h1>
    <p>
        Текущий год:
        <?php echo $p_main; ?>
    </p>








</body>

</html>
