<!-- o aluno deve simular uma divisão com quociente e resto, organizando visualmente os dados do cálculo, incluindo dividendo, divisor, resultado e sobra; -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>

<body>
    <!--pre-->
    <main>
        <?php 
                $D = $_GET["D"] ?? 1; // D = Dividendo 
                $d = $_GET["d"] ?? 1; // d = Divisor
                $resultadoDiv = $D / $d ?? 0; 
                $r = $D % $d ?? 0; // r = Resto da divisão
        ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="D">Dividendo</label>
            <input type="number" name="D" id="D" value="<?="$D"?>" />
            <label for="d">Divisor</label>
            <input type="number" name="d" id="d" value="<?="$d"?>" />
            <input type="submit" value="Analisar">
        </form>
    </main>
    </!--pre->
    <section>
        <?php 
            echo "<h2>Estrutura da Divisão</h2>";
            // var_dump($D, $d, $resultadoDiv, $r);
            echo "<p>O dividendo é: <b>$D</b></p>";
            echo "<p>O divisor é: <b>$d</b></p>";
            echo "<p>O resto é: <b>$r</b></p>";
            echo "<p>O resultado é: <b>$resultadoDiv</b></p>";
        ?>
    </section>
</body>

</html>