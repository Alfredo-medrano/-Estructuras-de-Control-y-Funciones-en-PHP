<?php
function esPalindromo($cadena) {
    $limpia = preg_replace('/[^a-z0-9]/', '', strtolower($cadena));
    return $limpia === strrev($limpia);
}

$texto = "Reconocer";
echo esPalindromo($texto) 
    ? "La frase \"$texto\" es un palíndromo."
    : "La frase \"$texto\" no es un palíndromo.";
?>
