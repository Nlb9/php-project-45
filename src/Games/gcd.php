<?php

namespace BrainGames\Games;

use function BrainGames\Engine\coreLogic;

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
    $desription = "Find the greatest common divisor of given numbers.";
    $funkValues = function () {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $answer = gcd($number1, $number2);
        $question = "$number1 $number2";

        return [$question, $answer];
    };
    coreLogic($desription, $funkValues);
}
