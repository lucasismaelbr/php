<!--converte um total de segundos em semanas, dias, horas, minutos e segundos, explorando divisão inteira e resto de forma prática;-->
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
            // Captura o valor em segundos  
            $sec = $_GET["seg"] ?? 0;

            $week = $sec / 604800 ?? 0;
            $day = $sec % 604800 / 86400 ?? 0;
            $hours = $sec % 604800 % 86400 / 3600 ?? 0;
            $mins = $sec % 604800 % 86400 % 3600 / 60 ?? 0;
            $secs = $sec % 604800 % 86400 % 3600 % 60 / 1 ?? 0;
        ?>
        <h2>Calculadora de tempo</h2>
        <form action="">
            <label for="seg">
                Qual é o total de segundos?
            </label>
            <input type="number" name="seg" id="id_seg" value="<?= $sec ?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            echo "<h2>Totalizando tudo</h2>";
            print "<p>Analisando o valor que você digitou, <b>" . number_format($sec, 0, ",", ".") . " segundos</b> equivalem a um total de: </p>";
            print "
            <ul>
                <li>" . (int)$week . " Semanas</li>
                <li>" . (int)$day . " Dias</li>
                <li>" . (int)$hours . " Horas</li>
                <li>" . (int)$mins . " Minutos</li>
                <li>" . (int)$secs . " Segundos</li>
            </ul>";
        ?>
    </section>
</body>
</html>