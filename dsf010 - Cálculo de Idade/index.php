<!--com base no ano de nascimento informado, o sistema calcula a idade atual ou a idade em qualquer outro ano, utilizando a data do servidor;-->
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
            $anoNasc = $_GET["anoNasc"] ?? 0;
            $anoFut = $_GET["anoFut"] ?? 0;
            $idade = $anoFut - $anoNasc;
        ?>
        <h2>
            Calculando a sua idade
        </h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="anoNasc">
                Em que ano você nasceu?
            </label>
            <input type="number" name="anoNasc" id="id_anoNasc" placeholder="2008" value="<?= $anoNasc ?>" required />
            <label for="anoFut">
                <?php 
                    echo "Quer saber a sua idade em que ano? (Atualmente estamos em <b>" . date("Y") . "</b>)";
                ?>
            </label>
            <input type="number" placeholder="2030" name="anoFut" id="id_anoFut" value="<?= $anoFut ?>" required>
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <?php 
            print"<h2>Resultado</h2>";
            print"<p>Quem nasceu em $anoNasc vai ter <b>$idade anos </b> em $anoFut!</p>";
        ?>
    </section>
</body>
</html>