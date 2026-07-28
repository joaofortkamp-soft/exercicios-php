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

//6. Função com nome
function saudacao($nome) {
    echo "Olá $nome!\n";
} 
saudacao("Carlos Johnson");

//7. Função soma, subtração e frase
function operacoes($a, $b) {
    $soma = $a + $b;
    $subtracao = $a - $b;
    $frase = "A soma de $a e $b é $soma, e a subtração é $subtracao. Incrível!";

    return [
        "soma" => $soma,
        "subtracao" => $subtracao,
        "frase" => $frase
    ];
}

$resultado = operacoes(10, 4);
echo "Soma: ", $resultado["soma"], "\n";
echo "Subtração: ", $resultado["subtracao"], "\n";
echo $resultado["frase"], "\n";


//8. Array de memes com foreach
$memes = [
    "Distracted Boyfriend",
    "Drake Hotline Bling",
    "Doge",
    "This Is Fine",
    "Woman Yelling at a Cat"
];

foreach ($memes as $meme) {
    echo $meme, "\n";
}

//9. Array de raças de papagaio

$racasPapagaio = [
    "Calopsita",
    "Arara Azul",
    "Papagaio-verdadeiro",
    "Periquito Australiano"
];

$racasPapagaio[] = "Ring-necked Parakeet";

foreach ($racasPapagaio as $raca) {
    echo $raca, "\n";
}

//10. Array associativo

$pessoa = [
    "nome" => "João",
    "idade" => 20,
    "cidade" => "Guarapuava",
    "tchola" => 500.00
];

echo "Nome: ", $pessoa["nome"], "\n";
echo "Idade: ", $pessoa["idade"], "\n";
echo "Cidade: ", $pessoa["cidade"], "\n";
echo "Tchola: R$ ", $pessoa["tchola"], "\n";

//11. Formulário de IMC
<?php
$imc = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $peso = (float) $_POST["peso"];
    $altura = (float) $_POST["altura"];

    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="POST">
        <label>Peso (kg): <input type="number" step="0.01" name="peso" required></label><br>
        <label>Altura (m): <input type="number" step="0.01" name="altura" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($imc !== null): ?>
        <p>Seu IMC é: <?php echo number_format($imc, 2); ?></p>
    <?php endif; ?>
</body>
</html>

//12. Calculadora HTML

<?php
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case "somar":
            $resultado = $numero1 + $numero2;
            break;
        case "subtrair":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicar":
            $resultado = $numero1 * $numero2;
            break;
        case "dividir":
            $resultado = $numero2 != 0 ? $numero1 / $numero2 : "Erro: divisão por zero";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST">
        <label>Número 1: <input type="number" step="any" name="numero1" required></label><br>
        <label>Número 2: <input type="number" step="any" name="numero2" required></label><br>

        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>

    <?php if ($resultado !== null): ?>
        <p>Resultado: <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
