<?php
function esPrimo($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) if ($n % $i === 0) return false;
    return true;
}

$numero = 39;
echo esPrimo($numero) ? "El número $numero es primo." : "El número $numero no es primo.";
