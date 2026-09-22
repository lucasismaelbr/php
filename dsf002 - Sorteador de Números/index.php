<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números aleatórios</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>
<body>
    <main>
        <?php
            $min = 0;
            $max = 100;

            $_POST["teste"] = $numero_gerado = mt_rand($min, $max);

            // rand() = 1951 - Linear congretial Generator
            // mt_rand() = 1997 - Mersanne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera números aleatório criptograficamente seguros

            echo "<h1>Trabalhando com números aleatórios</h1>";
            echo "Gerando um número aleatório entre 0 e 100...<br>";
            echo "O valor gerado foi <b>$numero_gerado</b><br><br>";
        ?>
        <form method="POST">
            <button name="teste">&#x1F504; Gerar outro</button>
        </form>
    </main>
</body>
</html>

<!-- Sugestão na IA de fazer reload na página -->
<!-- 
        <?php
            //$numero_gerado = rand(0, 100);

            //echo "<h1>Trabalhando com números aleatórios</h1>";
            //echo "Gerando um número aleatório entre 0 e 100...<br>";
            //echo "O valor gerado foi <b>$numero_gerado</b><br><br>";
        ?>
        <button onlick="javascript:document.location.reload">
-->