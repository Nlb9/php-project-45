<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function coreLogic(callable $funkValues)
{
    for ($correctAnswer = 1; $correctAnswer <= 3; $correctAnswer++) {
        [$question, $answer] = $funkValues();
        line("Question: $question");
        $playerAnswer = prompt('Your answer');

        if ($playerAnswer == $answer) {
            line('Correct!');
        } else {
            line("$playerAnswer is wrong answer ;(. Correct answer was $answer. \nLet's try again");
            break;
        }
    }
    line("Congratulations!");
}
