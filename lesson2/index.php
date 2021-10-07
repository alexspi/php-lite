<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
// Затем написать скрипт, который работает по следующему принципу:
//
//    если $a и $b положительные, вывести их разность;
//    если $а и $b отрицательные, вывести их произведение;
//    если $а и $b разных знаков, вывести их сумму;
//

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";

if ($a >= 0 && $b >= 0) { // если a и b положительны
    $c = $a - $b;
    echo "Разность чисел равна: {$c}";
} elseif ($a < 0 && $b < 0) { // если a и b отрицательны
    $c = $a * $b;
    echo "Произведение чисел равно: {$c}";
} else { // если a или b разных знаков, т.е. хотя бы одно из них отрицательно
    $c = $a + $b;
    echo "Сумма чисел равна: {$c}";
}

//2. Присвоить переменной $а значение в промежутке [0..15].
// С помощью оператора switch организовать вывод чисел от $a до 15.

$a = mt_rand(0, 15);

// Вариант №1.
switch ($a) {
    case 0:
        echo $a++ . "<br>";
    case 1:
        echo $a++ . "<br>";
    case 2:
        echo $a++ . "<br>";
    case 3:
        echo $a++ . "<br>";
    case 4:
        echo $a++ . "<br>";
    case 5:
        echo $a++ . "<br>";
    case 6:
        echo $a++ . "<br>";
    case 7:
        echo $a++ . "<br>";
    case 8:
        echo $a++ . "<br>";
    case 9:
        echo $a++ . "<br>";
    case 10:
        echo $a++ . "<br>";
    case 11:
        echo $a++ . "<br>";
    case 12:
        echo $a++ . "<br>";
    case 13:
        echo $a++ . "<br>";
    case 14:
        echo $a++ . "<br>";
    case 15:
        echo $a++ . "<br>";
}
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.
//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";
function add($a, $b)
{
    return $a + $b;
}

function reduce($a, $b)
{
    return $a - $b;
}

function divide($a, $b)
{
    return ($b == 0) ? "Ошибка" : $a / $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function mathOperation($a, $b, $operation = '')
{
    if ($operation) {
        switch ($operation) {
            case "add":
                return "Сумма чисел: " . add($a, $b) . "<br>";
            case "reduce":
                return "Разность чисел: " . reduce($a, $b) . "<br>";
            case "divide":
                return "Частное чисел: " . divide($a, $b) . "<br>";
            case "multiply":
                return "Произведение чисел: " . multiply($a, $b);
            default:
                return "Неверная операция";
        }
    }
    return "Сумма чисел: " . add($a, $b) . "<br>" .
        "Разность чисел: " . reduce($a, $b) . "<br>" .
        "Частное чисел: " . divide($a, $b) . "<br>" .
        "Произведение чисел: " . multiply($a, $b);
}

echo mathOperation($a, $b, "add");
echo mathOperation($a, $b, "reduce");
echo mathOperation($a, $b, "divide");
echo mathOperation($a, $b, "multiply");

//5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон,
// вывести текущий год в подвале при помощи встроенных функций PHP.

?>
<footer>
    <?php
    $current_year = date('Y');
    echo "© SiteName.ru 2013-" . $current_year;
    ?>
</footer>

