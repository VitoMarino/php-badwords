<?php
    $titolo = "Commedia di Dante: Canto I";

    $paragrafo = "Nel mezzo del cammin di nostra vita
        mi ritrovai per una selva oscura,
        ché la diritta via era smarrita.

        Ahi quanto a dir qual era è cosa dura
        esta selva selvaggia e aspra e forte
        che nel pensier rinova la paura!

        Tant' è amara che poco è più morte;
        ma per trattar del ben ch'i' vi trovai,
        dirò de l'altre cose ch'i' v'ho scorte.

        Io non so ben ridir com' i' v'intrai,
        tant' era pien di sonno a quel punto
        che la verace via abbandonai.

        Ma poi ch'i' fui al piè d'un colle giunto,
        là dove terminava quella valle
        che m'avea di paura il cor compunto,

        guardai in alto e vidi le sue spalle
        vestite già de' raggi del pianeta
        che mena dritto altrui per ogne calle.";

        $paragrafo = str_replace($_GET["censured"], "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="ita">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <main>
        <h1>
            <?php
                echo $titolo;
            ?>
        
        </h1>
        
        <p>
            <strong>
            La lunghezza delle righe è di: <?php echo strlen($paragrafo);?>
            </strong>
        </p>

        <p>
            <?php
                echo $paragrafo;
            ?>
        </p>

    </main>

    <form action="./index.php" method="GET">
        <input type="text" name="censured" id="censured">
        <button type="submit">INVIA</button>
    </form>
</body>
</html>