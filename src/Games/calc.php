<?php
namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

function calc()
{
    $number1 = rand(0, 100);
    $number2 = rand(0, 100);
    $index = rand(1, 3);
    $calcOper = ['+', '-', '*'];
    $calcRes = [
                '+' => $number1 + $number2, 
                '-' => $number1 - $number2,
                '*' => $number1 * $number2
            ];
    $sign = $calcOper[$index];

    line("Question: $number1 $sign $number2");
    $answer = prompt("Your answer");
    
    return ($answer == $calcRes[$sign]) ? line("Correct!") : line("$answer is wrong answer ;(. Correct answer was $calcRes[$sign].\nLet's try again!");
}