<?php
$section = $_GET['section'] ?? "";

function checkTask(callable $check, string $label, string $errorMsg) : void
{
    if($check())
        echo("<div>$label: <span class=\"w3-text-green\">OK</span></div>");
    else
        echo("<div>$label: <span class=\"w3-text-red\">$errorMsg</span></div>");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Kurs</title>

        <link href="./assets/w3.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./assets/default.min.css">

        <script src="./assets/highlight.min.js"></script>

    </head>

    <body class="w3-container">
        <header>
            <h1>PHP Kurs</h1>
        </header>
        <main>    
            <a class="w3-btn w3-round w3-border" href="index.php">Zum Menü</a>
            <?php 
            $include = "sections/main-menu.php";
            switch($section)
            {
                case "01": $include = "sections/01-variablen.php"; break;
                case "02": $include = "sections/02-operatoren.php"; break;
            }
            $fileName = dirname($_SERVER["SCRIPT_FILENAME"]) . "/" . $include;
            
            include($include);
            ?>
        </main>
        <script>hljs.highlightAll();</script>
    </body>
</html>