<?php
/* Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina:
al caricamento della pagina ci saranno tutti i dischi. */

@require __DIR__ . './dist/templates/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- MyCSS -->
    <link rel="stylesheet" href="./dist/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div id="app">

        <header>

            <i class="fab fa-spotify"></i>

        </header>

        <div class="container">

            <?php
            foreach ($dischi as $disco) {
            ?>

            <div class="card">
                <img src="<?php echo $disco["poster"]; ?>" alt="">
                <h2 class="titolo"><?php echo $disco["title"]; ?></h2>
                <span class="scritte"><?php echo $disco["author"]; ?></span>
                <span class="scritte"><?php echo $disco["year"]; ?></span>
            </div>

            <?php
            }
            ?>

        </div>

    </div>

    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- MyScript -->
    <script src="./dist/js/app.js"></script>
</body>

</html>