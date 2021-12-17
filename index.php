<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <!-- php -->
    <?php
        // php variable
        $lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quis, impedit, ipsa officiis atque placeat quod veritatis, at tenetur quibusdam quas ipsam fuga odit harum saepe eius nisi iusto veniam.';
        // get String length of lorem variable
        $txtLength = strlen($lorem);
    ?>

    <h1> <?php echo $lorem ?></h1>
    <p>Il testo comprende: <?php echo $txtLength ?> caratteri&period;</p>
</body>
</html>