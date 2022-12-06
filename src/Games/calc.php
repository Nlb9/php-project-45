<?php

namespace BrainGames\Games;

use function BrainGames\Engine\coreLogic;

function calc()
{  
    $desription = "What is the result of the expression?";
    $funkValues = function () {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $calcOper = ['+', '-', '*'];        // набор мат. операций
        $index = array_rand($calcOper);     // случайный индекс из имеющегося массива
        $sign = $calcOper[$index];          // имея случайный индекс берем из массива мат. оператор
        $calcRes = [
            '+' => $number1 + $number2,     //      \
            '-' => $number1 - $number2,     //        --- просчитаные варианты операций в ассоциативном массиве
            '*' => $number1 * $number2      //      /
        ];
        $answer = $calcRes[$sign];          // подставляем оператор в ассоциативный массив
        $question = "$number1 $sign $number2";

        return [$question, $answer];
    };
    coreLogic($desription, $funkValues);
}

