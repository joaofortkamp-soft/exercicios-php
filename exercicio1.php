<?php

// 1.IF/ELSE-idade
$idade = 20;

if ($idade >= 18) {
    echo "Você é maior de idade\n";
} else {
    echo "Você é menor de idade\n";
}

// ===== 2. IF/ELSE - dinheiro =====
$dinheiro = 15000;

if ($dinheiro < 1000) {
    echo "Pobre\n";
} elseif ($dinheiro < 10000) {
    echo "Classe Média\n";
} elseif ($dinheiro < 100000) {
    echo "Riquinho\n";
} elseif ($dinheiro < 1000000000) {
    echo "Ricão\n";
} else {
    echo "Elon Musk\n";
}

//3. Operação com switch
$numero1 = 10;
$numero2 = 5;
$operacao = "+";

switch ($operacao) {
    case "+":
        echo $numero1 + $numero2, "\n";
        break;
    case "-":
        echo $numero1 - $numero2, "\n";
        break;
    case "*":
        echo $numero1 * $numero2, "\n";
        break;
    case "/":
        echo $numero1 / $numero2, "\n";
        break;
    default:
        echo "Operação inválida\n";
}

// 4 Números pares de 1 até 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i, " ";
    }
}
echo "\n";

// 5. Tabuada de 4, 7 e 12.879,5 
$numeros = [4, 7, 12879.5];


foreach ($numeros as $numero) {
    echo "\nTabuada do $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = ", $numero * $i, "\n";
    }
}
