<?php
function fibonacci($n) {
    if ($n <= 0) {
        echo "El número debe ser mayor a 0.";
        return;
    }

    $a = 0;
    $b = 1;
    $serie = "$a";

    for ($i = 1; $i < $n; $i++) {
        $serie .= " $b";
        [$a, $b] = [$b, $a + $b];
    }

    echo "Fibonacci: $serie";
}

fibonacci(15);
