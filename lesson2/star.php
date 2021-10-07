<?php
date_default_timezone_set('UTC');

//6. *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
    if ($pow) {
        return $val * power($val, $pow - 1);
    }
    return 1;
}

var_dump(power(5, 3));

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
$hour = date('h');
$minute = date('i');


function num_word($value, $words, $show = true)
{
    $num = $value % 100;
    if ($num > 19) {
        $num = $num % 10;
    }

    $out = ($show) ? $value . ' ' : '';
    switch ($num) {
        case 1:
            $out .= $words[0];
            break;
        case 2:
        case 3:
        case 4:
            $out .= $words[1];
            break;
        default:
            $out .= $words[2];
            break;
    }

    return $out;
}

echo num_word($hour, array('час', 'часа', 'часов'));
echo num_word($minute, array('минута', 'минуты', 'минут'));