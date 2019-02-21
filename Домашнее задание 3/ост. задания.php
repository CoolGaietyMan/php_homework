<?php

echo '<br/>';

$string = 'Здесь что-то написано';
$string = str_replace(' ', '_', $string);

echo $string.'<br/>';




$menu = [
    'Пункт 1',
    'Пункт 2' => ['Подпункт 1', 'Подпункт 2', 'Подпункт 3'],
    'Пункт 3' => ['Подпункт 4' => ['Вложеный 1', 'Вложеный 2']]
];
function menu_create($arr)
{
    $createArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $createArr[] = '<li>' . $key . menu_create($value) . '</li>';
        } else {
            $createArr[] = '<li>' . $value . '</li>';
        }
    }
    $createArr[] = '</ul>';
    return implode($createArr);
}
echo menu_create($menu);










?>