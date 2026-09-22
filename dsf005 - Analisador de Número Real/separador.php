<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="../global/css/php-moderno.css"/>
</head>
<body>
    <main>
        <?php
            $numReal = $_POST["numeroReal"] ?? 0;
            $numInt = intdiv($numReal, 1);
            $numMdl = $numReal - $numInt;

            //num = $_POST["n"] ?? 0;
            //$int = (int) $num;
            //fra = $num - $int;

            echo "
            <h1>
                Analisador de Número Real
            </h1>

            <p>
                Analisando o número <b>" . number_format($numReal, 3, ',', '.') . "</b> informado pelo usuário:
            </p>
            <ul>
                <li>
                    A parte inteira do número é <b>" . number_format($numInt, 0, ',', '.') . "</b>
                </li>
                <li>
                A parte fracionada do número é <b>" . number_format($numMdl, 3, ',', '.') . "</b>
                </li>
            </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>