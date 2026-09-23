<!--simula um saque em um caixa eletrônico, mostrando quantas notas de cada valor serão entregues com base no valor informado, considerando as cédulas disponíveis-->
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
        <?php 
            // Receber o valor 
            $valorSaque = $_GET['valorSaque'] ?? 0;

            // Dividir o valor em cédulas de R$100
            $cem = $valorSaque / 100 ?? 0;

            // Dividir o resto do valor de R$100 em cédulas de R$50
            $cinquenta = $valorSaque % 100 / 50 ?? 0;

            // Dividir o resto do valor de R$100 e R$50 em cédulas de R$10
            $dez = $valorSaque % 100 % 50 / 10 ?? 0;

            // Dividir o resto do valor de R$100, R$50, R$10 em cédulas de R$5
            $cinco = $valorSaque % 100 % 50 % 10 / 5 ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valorSaque">
                Qual valor você deseja sacar? (R$)*
            </label>
            <input type="number" step="5"  name="valorSaque" id="id_valorSaque" value="<?= "$valorSaque" ?> required">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<h2>Saque de ". numfmt_format_currency($padrao, $valorSaque, "BRL")  . " realizado</h2>";
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            echo "<ul><li><p>x" . (int)$cem . "</p></li>";
            echo "<p><li>x" . (int)$cinquenta . "</p></li>";
            echo "<p><li>x" . (int)$dez . "</p></li>";
            echo "<p><li>x" . (int)$cinco . "</p></li></ul>";
        ?>
    </section>
</body>
</html>