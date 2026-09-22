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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            // Cria uma variavel e atribui uma data de inicio da pesquisa
            $inicio = date("m-d-Y", strtotime("-7 days"));

            // Cria uma variavel e atribui uma data de fim da pesquisa indicando o hoje pra retratar que a pesquisa vai puxar uma cotação do passado
            $fim = date("m-d-Y");

            // Exibe as datas para ver se ambas estão certas
            // var_dump($inicio, $fim);

            // Puxar cotação da Api atráves da API Publica do BCB
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao ';

            // Atribui a uma variavel os valores que vem da $url e formata eles dentro de um Array Associativo
            $dados = json_decode(file_get_contents($url), true);

            // Reproduz na tela o resultado da leitura da API atribuida a variavel $dados
            // var_dump($dados);

            // Atribui o valor obtido atráves da API a uma variavel
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Atribui a data da ultima cotação obtida atráves da API a uma variavel
            $data = $dados["value"][0]["dataHoraCotacao"];

            // Exibe o valor da variavel cotação atribuida pelo Array que veio do Json da API
            // echo "$cotacao";

            // Atribui valor a variavel real, o valor atribuido vem do Form do Html
            $valor_carteira = $_REQUEST["valor_carteira"];

            // Exibe o valor em R$ digitado no form
            // var_dump($valor_carteira);

            // Converteremos o valor em R$ digitado pela pessoa para dolar
            $valor_carteira_conv = $valor_carteira / $cotacao;

            // Formataremos os valores para se adequar ao modelo de moedas monetárias 
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            // Exibiremos o valor da carteira da pessoa em dolar
            echo "<p>Seus " . numfmt_format_currency($padrao, $valor_carteira, "BRL") . " equivalem a <b> " . numfmt_format_currency($padrao, $valor_carteira_conv, "USD") . "</b></p>";

            // Exibe a informação que essa cotação foi puxada de forma online via API
            echo "Cotação obtida diretamente do site do <b>Banco Central do Brasil</b><br><br>";

            // Exibe o valor da cotação, data e hora
            echo "O valor da cotação obtida atráves da API é " . numfmt_format_currency($padrao, $cotacao, "BRL") . " com a última atualização vinda de " . $data;
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>