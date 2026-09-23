<!--simula o reajuste de preço de um produto, aplicando um percentual de aumento e mostrando o novo valor, com ou sem barra deslizante (range);-->
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
            $priceProduct = $_GET["price"] ?? 0;
            $percentual = $_GET["percentual"] ?? 0;
            $newPrice = $priceProduct * $percentual / 100 + $priceProduct;


        ?>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="price">
                Preço do produto (R$)
            </label>
            <input type="number" step="any" name="price" id="id_price" value="<?= $priceProduct ?> ?>" required>
            <label for="reajuste">
                <?= "Qual será o percentual de reajuste? (<strong>$percentual%</strong>)" ?>
            </label>
            <input type="range" min="0" max="100" value="<?= $percentual ?>" name="percentual" id="id_percentual">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $padrao = numfmt_create("pt-BR", numberFormatter::CURRENCY);
            echo "<h2>Resultado do Reajuste</h2>";
            echo "<p>O produto que custava " . numfmt_format_currency($padrao, "$priceProduct", "BRL") . " com <strong>$percentual% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, "$newPrice", "BRL") . "</strong> a partir de agora.</p>";
        ?>
    </section>
</body>
</html>