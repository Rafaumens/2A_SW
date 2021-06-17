<?php
echo "<pre>";

// ADQUIRINDO OS VALORES DO USUÀRIUO

$entradas = $_POST;

// ARRAY COM TAMANHO DETERMINADO PELO USUÁRIO & PREENCHIMENTO COM NÚMEROS ALEATÓRIOS

$numeroAlea = array();

for ($x = $entradas["inicial"]; $x < $entradas["final"]; $x++) {

    $numeroAlea[] = rand();

}

// FUNÇÃO PARA TESTAR SE O NÚMERO É PAR OU ÍMPAR

function TestePar($num) {
    if ($num % 2 == 0) {

        return "O número " . $num . " é PAR";
    } else{
        
        return "O número " . $num . " é ÍMPAR";
    }
}

// RESULTADOS

echo "Aqui estão os resultados: ";

echo "<br>"; 
echo "<br>";

foreach ($numeroAlea as $key => $value) {

    echo (TestePar($value)) . ". Chave[" . $key . "]"; echo "<br>"; 
    echo "<br>";

}
?>