<?php
$word_to_clip = $_GET['word'];
$full_string = $_GET['fullString'];
$censured_string = str_replace($word_to_clip, '***', $full_string)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Bad Words: result</title>
</head>

<style>
    h4 {
        margin-bottom: 40px;
    }
</style>

<body class="bg-dark">
    <div class="container text-center text-white py-5">
        <h1 class="mb-4">Your result</h1>
        <div class="bg-light text-dark p-5">
            <h3>Parola da censurare:</h3>
            <h4>
                <?= $word_to_clip ?>
            </h4>
            <h3>Stringa originale:</h3>
            <h4>
                <?= $full_string ?>
            </h4>
            <h3>Stringa censurata:</h3>
            <h4>
                <?= $censured_string ?>
            </h4>
        </div>
    </div>
</body>

</html>