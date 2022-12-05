<?php

namespace BrainGames\Games;

use function BrainGames\Engine\coreLogic;

function even()
{
    $funkValues = function () {
        $number = rand(0, 100);
        $answer = $number % 2 === 0 ? "yes" : "no";
        $question = "$number";

        return [$question, $answer];
    };
    coreLogic($funkValues);
}
