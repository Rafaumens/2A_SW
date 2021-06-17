<?php

// Rafael Augusto Mendes da Silva - 2º ano Informática para Web

echo "<pre>";

$termoA = 1;
$termoB = 12;
$termoC = -13;

echo "Rafael Augusto Mendes da Silva - 2º ano Informática para Web";
echo "<br>";
echo "<br>";

echo "Bhaskara em PHP";

echo "<br>";
echo "<br>";

echo "Equação utilizada: x^2 + 12x - 13 = 0";

echo "<br>";
echo "<br>";

// Primeiro Passo - Discriminante (Δ)
echo "Descobrir o Δ (Discriminante):";

echo "<br>";

echo "Discriminante: b^2 - 4ac";

echo "<br>";

echo "Realizando a substituição...";

echo "<br>";

echo "($termoB * $termoB) - 4 * $termoA . $termoC";

echo "<br>";

echo ($termoB * $termoB), " + ", (-4 * $termoA * $termoC);

echo "<br>";

$discriminante = ($termoB * $termoB) - 4 * $termoA * $termoC;

echo "Δ = $discriminante";

echo "<br>";
echo "*OBS: Como Δ > 0, essa equação possuirá 2 raízes reais distintas*";

echo "<br>";
echo "<br>";

// Segundo Passo - Primeira Raiz 

echo "<br>";

echo "Descobrindo as Raízes";

echo "<br>";

echo "Fórmula Geral: -b ± √Δ";

echo "<br>";
echo "                 2a";
echo "<br>";
echo "<br>";

echo "Descobrindo a primeira raiz (x')";

echo "<br>";

echo "-$termoB + √$discriminante / 2 . $termoA";

echo "<br>";

echo "-$termoB + ", sqrt($discriminante), " / 2";

echo "<br>";

echo -$termoB + sqrt($discriminante), " / 2";

echo "<br>";

echo "x' = ", (-$termoB + sqrt($discriminante))  / (2 * $termoA);
echo "<br>";
echo "<br>";


// Terceiro Passo - Segunda Raiz

echo "Descobrindo a segunda raiz (x'')";

echo "<br>";

echo "-$termoB - √$discriminante / 2 . $termoA";

echo "<br>";

echo "-$termoB - ", sqrt($discriminante), " / 2";

echo "<br>";

echo -$termoB - sqrt($discriminante), " / 2";

echo "<br>";

echo "x'' = ", (-$termoB - sqrt($discriminante))  / (2 * $termoA);

?>