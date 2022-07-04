<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function cli()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\"");
    $wrongAnswer = false;

    for ($attempts = 0; $attempts < 3; $attempts++) {
        $num = rand(1, 20);
        $answer = prompt("Question: " . $num);
        if ($num % 2 === 0 && $answer === 'yes' || $num % 2 !== 0 && $answer === 'no') {
            line('Correct!');
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, %s", $name);
            break;
        }
        if ($attempts === 2) {
            line("Congratulations, %s!", $name);
        }
    }

}
