<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Calculo</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css">
</head>

<body>
    <header>
        <h1>
            Resultado Final
        </h1>
    </header>
    <main>
        <?php  
            $num = $_GET ["valor_numero"]; 
            // Sugestão da IA adicionar o ?? 0; que eu esqueci
            echo "O número escolhido foi: <b>$num</b>";

            $ant = $num -1;
            echo "<br> O antecessor do número $num é: <b>$ant</b>";

            $suc = $num +1;
            echo "<br>O sucessor do número $num é: <b>$suc</b><br><br>";
        ?>

        <!-- Sugestão da IA substituir o <a> e o <button> apenas por:

        <button onclick="javascript:history.go(-1)">&#8592; Voltar</button>

        ou 

        <button onclick="javascript:window.location.href='index.html'">&#8592; Voltar</button>

        Para evitar o uso de a dentro de button -->

        <a href="javascript:history.go(-1)"><button>
                &#x2B05; Voltar
            </button></a>
    </main>
</body>

</html>