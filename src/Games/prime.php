<?php

namespace BrainGames\Games;

use function BrainGames\Engine\coreLogic;

function isPrime(int $num): bool
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $desription = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $funkValues = function () {
        $number = rand(0, 300);
        $answer = isPrime($number) ? "yes" : "no";
        $question = $number;
        return [$question, $answer];
    };
    coreLogic($desription, $funkValues);
}
