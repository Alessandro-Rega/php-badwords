<?php 
    $testo = "Ciao mi chiamo Alessandro sono uno studente di Boolean, faccio parte della classe 47";
    $testo_censurato = str_replace($_GET["parola"], "***", $testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h2>Testo non censurato</h2>
    <h3>Totale caratteri <?php echo strlen($testo); ?></h3>
    <p>
        <?php echo $testo; ?>
    </p>
    <hr>
    <h2>Testo censurato</h2>
    <h3>Totale caratteri <?php echo strlen($testo_censurato); ?></h3>
    <p>
        <?php echo $testo_censurato; ?>
    </p>
</body>
</html>