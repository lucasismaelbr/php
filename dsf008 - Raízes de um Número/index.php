<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>
<body>
    <main>
        <?php 
            $num = $_GET["num"] ?? 0;
            $rQuadrada = sqrt($num) ;
            $rCubica = pow($num, 1/3);
            // $rQuadrada = $num ** (1/2);
            // $rCubica = $num ** (1/3);
        ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="num">Número:</label>
            <input type="number" step="any" name="num" id="num" placeholder="64" value="<?="$num"?>" required />
            <input type="submit" value="Calcular Raízes"/>
        </form>
    </main>
    <section>
        <?php 
            echo "<h2>Resultado Final</h2>";
            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<p>A sua raiz quadrada é <strong>" . number_format($rQuadrada, 3, ",", ".") . "</strong></p>";
            echo "<p>A sua raiz cúbica é <strong>" . number_format($rCubica, 3, ",", ".") . "</strong></p>";
        ?>
    </section>
</body>
</html>