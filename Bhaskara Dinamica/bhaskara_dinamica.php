<?php 

echo '<pre>'; 

// A variavel $entradas está armazenando o Array do $_POST

$entradas = $_POST;

// Funções

function delta($a ,$b , $c) {

    $resultadoDelta = ($b * $b) -4 * $a * $c;

    return $resultadoDelta;

}

function raiz1($a ,$b , $c) {
    
    $resultadoDelta = ($b * $b) -4 * $a * $c;

    $resultadoRaiz1 = (-$b + sqrt($resultadoDelta))  / (2 * $a);

    return $resultadoRaiz1;

}

function raiz2($a ,$b , $c) {

    $resultadoDelta = ($b * $b) -4 * $a * $c;
    
    $resultadoRaiz2 = (-$b - sqrt($resultadoDelta))  / (2 * $a);

    return $resultadoRaiz2;

}

// A variavel $saidas está armzenando todos os resultados escolhidos.

$saidas = array();
 
$saidas["Delta"] = delta($entradas["termoA"], $entradas["termoB"], $entradas["termoC"]);
$saidas["raiz1"] = raiz1($entradas["termoA"], $entradas["termoB"], $entradas["termoC"]);
$saidas["raiz2"] = raiz2($entradas["termoA"], $entradas["termoB"], $entradas["termoC"]);

// Resultados escritos.

if ($entradas["termoA"] == 1){

    echo "A Equação escolhida foi: x<sup>2</sup> + " . $entradas["termoB"] . " " . $entradas["termoC"];
    echo "<br>";
    echo "<br>";

} else{

    echo "A Equação escolhida foi: ". $entradas["termoA"] . "x<sup>2</sup>" . $entradas["termoB"] . " " . $entradas["termoC"];
    echo "<br>";
    echo "<br>";

}

if($saidas["Delta"] > 0){

    echo "O valor de Delta é: " . $saidas["Delta"] . "<br>Logo, a Equação possui duas raízes reais distintas.";
    echo "<br>";
    echo "<br>";

} else if($saidas["Delta"] == 0){

    echo "O valor de Delta é: " . $saidas["Delta"] . "<br>Logo, a Equação possui apenas uma raíz real.";
    echo "<br>";
    echo "<br>";

} else {

    echo "O valor de Delta é: " . $saidas["Delta"] . "<br>Logo, a Equação não possui raízes reais distintas.";
    echo "<br>";
    echo "<br>";

}

echo "O valor da Primeira Raiz (x') é: " . $saidas["raiz1"];
echo "<br>";
echo "<br>";

echo "O valor da Segunda Raiz (x'') é: " . $saidas["raiz2"];
echo "<br>";
echo "<br>";

?>