<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;


function gcd(int $a, int $b)
{
    do {
        $a > $b ? $a %= $b : $b %= $a;
        $result = $a + $b;
    } while ($a != 0 && $b != 0);
    return $result;
}

function gcdPlay()
{
    $number1 = rand(0, 100);
    $number2 = rand(0, 100);

    $rightAnswer = gcd($number1, $number2);

    line("Question: $number1  $number2");
    $number1nswer = prompt("Your answer");

    return ($number1nswer == $rightAnswer) ? line("Correct!") : line("$number1nswer is wrong answer ;(. Correct answer was $rightAnswer.\nLet's try again!");
}
