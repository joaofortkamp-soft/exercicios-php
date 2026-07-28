<?php

// 1.IF/ELSE-idade
$idade = 20;

if ($idade >= 18) {
    echo "Você é maior de idade\n";
} else {
    echo "Você é menor de idade\n";
}

//  2. IF/ELSE - dinheiro 

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
