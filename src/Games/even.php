<?php
namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

function even()
{
    $number = rand(0, 100);
    $isEven = $number%2 === 0 ? "yes" : "no";

    line("Question: %d", $number);
    $answer = prompt("Your answer");
    
    ($answer === $isEven) ? line("Correct!") : line("$answer is wrong answer ;(. Correct answer was $isEven.\nLet's try again!");
}