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

//13. Formulário de cadastro com cartão

<?php
$dados = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dados = [
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "telefone" => $_POST["telefone"],
        "nascimento" => $_POST["nascimento"],
        "cidade" => $_POST["cidade"],
        "estado" => $_POST["estado"],
        "sexo" => $_POST["sexo"],
        "curso" => $_POST["curso"],
        "observacoes" => $_POST["observacoes"]
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        .cartao {
            border: 1px solid #333;
            border-radius: 8px;
            padding: 16px;
            max-width: 400px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Formulário de Cadastro</h1>

    <form method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Telefone: <input type="tel" name="telefone" required></label><br>
        <label>Data de nascimento: <input type="date" name="nascimento" required></label><br>
        <label>Cidade: <input type="text" name="cidade" required></label><br>
        <label>Estado: <input type="text" name="estado" required></label><br>
        <label>Sexo:
            <select name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </label><br>
        <label>Curso: <input type="text" name="curso" required></label><br>
        <label>Observações: <textarea name="observacoes"></textarea></label><br>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($dados !== null): ?>
        <div class="cartao">
            <h2>Cartão de Cadastro</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($dados["nome"]); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($dados["email"]); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($dados["telefone"]); ?></p>
            <p><strong>Nascimento:</strong> <?php echo htmlspecialchars($dados["nascimento"]); ?></p>
            <p><strong>Cidade:</strong> <?php echo htmlspecialchars($dados["cidade"]); ?></p>
            <p><strong>Estado:</strong> <?php echo htmlspecialchars($dados["estado"]); ?></p>
            <p><strong>Sexo:</strong> <?php echo htmlspecialchars($dados["sexo"]); ?></p>
            <p><strong>Curso:</strong> <?php echo htmlspecialchars($dados["curso"]); ?></p>
            <p><strong>Observações:</strong> <?php echo htmlspecialchars($dados["observacoes"]); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
