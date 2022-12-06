<?php

namespace BrainGames\Games;

use function BrainGames\Engine\coreLogic;

function arrGenerate()
{
    $progression = [];
    $start = rand(5, 15);
    $step = rand(2, 8);

    for ($i = 0; $i < 10; $i++) {
        $progression[] = $start + $step * $i;
    }

    return $progression;
}

function progression()
{
    $desription = "What number is missing in the progression?";
    $funkValues = function () {
        $progression = arrGenerate();                       // заполняем массив
        $index = array_rand($progression);                  // берем случайный индекс
        $replasements = array($index => '..');              // указываем чем будет заменен элемент по указанному индексу
        $swapped = array_replace($progression, $replasements);  // меняем базовый массив
        $answer = $progression[$index];                     // берем значение которое было в массиве изначально
        $question = implode(' ', $swapped);                 // переводим итоговый массив в строку
        return [$question, $answer];
    };
    coreLogic($desription, $funkValues);
}
