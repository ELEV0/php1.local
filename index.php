<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

// Задание 3
var_dump(3 / 1); // int 3
var_dump(1 / 3); // float 0.33333333333333
var_dump('20cats' + 40); // int 60
var_dump(18 % 4); // int 2 (целочисленный остаток от деления a на b)

// Задание 4

//Результатом выполнения оператора присваивания является само присвоенное значение. Таким образом, результат выполнения "$a = 2" будет равен 2
echo ($a = 2);
echo $x = ($y = 12) - 8; // $x теперь равен 4, а $y было присвоено 12.




// Задание 5
var_dump(1 == 1.0); // оператор сравнения
var_dump(1 === 1.0); // оператор идентичности (они не идентичны потому что первое INT, а второе FLOAT)
var_dump('02' == 2); // переводит строчку в число и получается 02. 02 и 2 это одно и то же
var_dump('02' === 2); // не идентичны потому что
var_dump('02' == '2'); // сравнивает 02 и 2

// Задание 6
$x = true xor true;
var_dump($x);
/*
 * сначала произошло присвоение переменной X а потом уже произошло сравнение
 * только вот результат никуда не записался, и мы увидели в ответе true
 * у xor ниже приоритет чем у =
 */
?>


</body>
</html>