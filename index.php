<?php
$section = $_GET['section'] ?? "main-menu";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Kurs</title>

        <link href="./assets/w3.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./assets/default.css">

        <script src="./assets/highlight.min.js"></script>

    </head>

    <body class="w3-container">
        <header>
            <h1>PHP Kurs</h1>
        </header>
        <main>            
            <?php 
            if($section != "main-menu")
                echo('<a href="index.php">Zum Menü</a>');

            include "./sections/$section.php"
            ?>
        </main>
        <script>hljs.highlightAll();</script>
    </body>
</html>