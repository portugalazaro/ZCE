<?php

$tipos = ['lazaro', "savio", 25, 2.4, true];


echo get_debug_type($tipos[1]);


echo get_debug_type($tipos[0]), "\n";
echo get_debug_type($tipos[1]), "\n";

// Se essa variável conter um inteiro, aumento o número por quatro
if (is_int($tipos[2])) {
    $tipos[2] += 4;
}
var_dump($tipos[2]);

// Se $a_bool for um texto, imprima
if (is_string($tipos[0])) {
    echo "String: $tipos[0]";
}


// Nota: get_debug_type() se tornou disponível no PHP 8.0.0. 
// Anteriormente, a função gettype() pode ser utilizada. 
// Entretanto, a função antiga não retorna nomes bem definidos.


echo "Documentação Oficial: <a href='https://www.php.net/manual/pt_BR/language.types.intro.php'>Tipos no PHP</a>";