<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>
<body>
    <main>
        <?php 
            echo "<h1>Conversor de Moedas v1.0</h1>";
            // Recebe o valor do form
            $valor_reais = $_POST["valor_carteira"] ?? 0;

            // Converte o valor com base na taxa fixa do dolar definida abaixo
            $valor_dolar = $valor_reais / 5.22;

            // Number_format ($sua_variavel, numero de casas decimais após a virgula, ', 123,12', '. 1.024')
            echo "Seus R$ " . number_format($valor_reais, 2, ',', '.') . " equivalem a <b>U$ " . number_format($valor_dolar, 2, '.', ',') . "</b><br>";

            echo "<br><b>*Cotação fixa de R$5,22</b> informada diretamente no código.<br><br>"
        ?>
        <button onclick="javascript:history.go(-1)">&#8592; Voltar</button>
    </main>
</body>
</html>

<?php 
    // Sugestão Gustavo Guanabara

    //$real = 1000;
    //$dolar = 5.11;

    //$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    //echo "Seus" . numfmt_format_currency ($padrao, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrao, $dolar, "USD");

?>