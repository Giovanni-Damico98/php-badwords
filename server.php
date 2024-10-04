<?php 
// Variabile che mi restituisce la frase scritta nell'input paragraph
$paragraph = $_GET['paragraph'];
// Variabile che mi restituisce la badword scritta nell'input badword
$badword = $_GET['badword'];
// Variabile con la quale sostituisco le occorrenze
$replace = "***";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-info-subtle">
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h1 class="text-center">Badword</h1>
                <h2>Paragraph:</h2>
                <!-- Stampo il paragrafo originale -->
                <p class="fw-bold mb-5"> <?= $paragraph ?></p>
                <h2>Paragraph Lenght: </h2>
                <!-- Stampo la lunghezza del paragrafo -->
                <span class="fw-bold d-block mb-5"><?= strlen($paragraph) ?></span>
                <!-- Stampo il paragrafo censurando la parola scritta nel campo badword -->
                <h2>Censored Paragraph:</h2>
                <p class="fw-bold"><?= str_replace($badword, $replace, $paragraph) ?></p>
            </div>
        </div>
    </main>
</body>
</html>