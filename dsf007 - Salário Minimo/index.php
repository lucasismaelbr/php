<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <?php
            $salario = $_GET["salario"] ?? 0;
            $salarioMin = 1380;
            $qntSalarios = $salario / $salarioMin ?? 0;
            $rSalarios = $salario % $salarioMin ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="salario">Salário (R$)</label>
            <input type="number" step="any" name="salario" id="salario" value="<?="$salario"?>" required placeholder="R$3.000,00" /> 
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular" />
        </form>
    </main>
    <section>
        <?php
            echo "<h2>Resultado Final</h2>";
            // echo "<p>$salario</p>";
            // echo "<p>$salarioMin</p>";
            // echo "<p>$qntSalarios</p>";
            // echo "<p>$rSalarios</p>";
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <b>" . (int)$qntSalarios . " salários minímos</b> + " . numfmt_format_currency($padrao, $rSalarios, "BRL") . ".";
        ?>
    </section>
</body>
</html>