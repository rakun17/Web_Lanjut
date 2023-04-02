<?php

$first_name = "Rangga";
$last_name = "Arisandi";

$sayHi = function () use ($first_name, $last_name) {
    echo "Hi $first_name $last_name" . PHP_EOL;
};

$sayHi();
