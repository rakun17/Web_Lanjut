<?php

function sayGoodBye(string $name, $filter)
{
    $fullName = $filter($name);
    echo "Good Bye $fullName" . PHP_EOL;
}

sayGoodBye("Rangga", function (string $name): string {
    return strtoupper($name);
});
