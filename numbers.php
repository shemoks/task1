<?php
$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];

function simpleNumbers($firstNumber, $secondNumber)
{
    $key = 0;
    for ($i = $firstNumber; $i <= $secondNumber; $i++) {
        $count = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }
        if ($count == 2 && $i != 1) {
            $node[$key] = $i;
            $key++;
        }
    }
    return $node;
}


/**
 * Эта функция генерирует таблицу
 * @param $node
 * @return string
 */
function viewTable($node)
{
    $table = "<table>";
    $table .= "<tr>";
    foreach ($node as $val) {
        $table .= "<td>";
        $table .= $val;
        $table .= "</td>";

    }
    $table .= "</tr>";
    $table .= "</table>";

    return $table;
}

echo "Простые числа </br>";
$numbers = simpleNumbers($firstNumber, $secondNumber);
echo viewTable($numbers);

