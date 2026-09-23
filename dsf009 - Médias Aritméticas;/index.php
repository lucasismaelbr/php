<!--realiza o cálculo da média simples e da média ponderada de duas notas com pesos distintos, reforçando a lógica matemática envolvida;-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>
<body>
    <?php
        $valor1 = $_GET["valor1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 1;
        $mArit = ($valor1 + $valor2) / 2;
        $mPond = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2) ;
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor1">
                1° Valor
            </label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>" required>
            <label for="peso1">
                1° Peso
            </label>
            <input type="number" name="peso1" id="idpeso1" value="<?=$peso1?>" required>
            <label for="valor2">
                2° Valor
            </label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>" required>
            <label for="peso2">
                2° Peso
            </label>
            <input type="number" name="peso2" id="idpeso2" value="<?=$peso2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php
            echo "<h2>Cálculo das Médias</h2>";
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul>
            <li>A <b>Média Aritmética Simples</b> entre os valores é igual a " . number_format($mArit, 2, ",", ".") . "</li>
            <li>A <b>Média Artimética Ponderada</b> com pesos $peso1 e $peso2 é igual a " . number_format($mPond, 2, ",", ".") . "</li>
            </ul>";
        ?>
    </section>
</body>
</html>