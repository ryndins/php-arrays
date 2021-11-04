<?php

function calcInPolishNotation(array $array)
{
    $stack = [];
    $operators = ['*', '/', '+', '-'];

    foreach ($array as $value) {
        if (!in_array($value, $operators)) {
            array_push($stack, $value);
            continue;
        }

        $b = array_pop($stack);
        $a = array_pop($stack);
        switch ($value) {
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = ($b === 0) ? null : $a / $b;
                break;
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
        }

        if ($result === null) {
            return null;
        }

        array_push($stack, $result);
    }
    return array_pop($stack);
}

print_r(calcInPolishNotation([1, 2, '+', 4, '*', 3, '+'])); // 15
print_r(PHP_EOL);
print_r(calcInPolishNotation([7, 2, 3, '*', '-'])); // 1
