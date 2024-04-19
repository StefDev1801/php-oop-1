<?php

require __DIR__ . '/Models/Production.php';


$production = [
    new Production('V per vendetta', 'ita', 8),
    new Production('Shutter Island', 'en', 9)
];

var_dump($production)
?>