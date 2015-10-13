<!DOCTYPE html>

<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>Sylterm - o firmie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sylterm.css">
    </head>
    <body>
        <header id="header" class="w3-container w3-row w3-theme-l1 w3-border-bottom">
            <div class="w3-container w3-third w3-center"><img id="logoSylterm" src="img/logoS.png" alt="logo firmy Sylterm" /></div>
            <div class="w3-container w3-twothird w3-center w3-hide-small"><h1>Sylterm najlepszy jest</h1></div>
        </header>
        <section id="oFirmie" class="w3-row">
            <div><p>Napis</p></div>
            <div><p>Inny napis</p></div>
            <div><p>Jeszcze inny napis</p></div>
        </section>
        <section id="partnerzy" class="w3-row w3-center">
            <div>
<?php
    define('LOGOTYPY_DIR', 'img/logotypy/');
    $fotki = glob(LOGOTYPY_DIR.'*.{jpg,JPG,png,PNG}',GLOB_BRACE);
    for ($i=0; $i<count($fotki); $i++) {            
        echo '<img src="'.$fotki[$i].'" alt="logo" />';
    }
?>
            
            </div>
        </section>
        <nav class="w3-row w3-text-theme">
            <a href="index.html">
                <div class="w3-third w3-center">
                    <p class="icon"><i class="fa fa-home fa-3x"></i></p>
                    <h2>Strona główna</h2>
                    <p>Powrót do strony startowej</p>
                </div>
            </a>
            <a href="galeria.php">
                <div class="w3-third w3-center">
                    <p class="icon"><i class="fa fa-picture-o fa-3x"></i></p>
                    <h2>Galeria</h2>
                    <p>Nasze realizacje - czyli zdjęcia tego, co już zrobiliśmy</p>
                </div>
            </a>
            <a href="kontakt.html">
                <div class="w3-third w3-center">
                    <p class="icon"><i class="fa fa-map-signs fa-3x"></i></p>
                    <h2>Kontakt</h2>
                    <p>Dane firmy i informacje, jak do nas dotrzeć</p>
                </div>
            </a>
        </nav>
        <footer class="w3-row w3-theme-d3">
            <div class="w3-half"><p>&copy; Sylterm 2015</p></div>
            <div class="w3-half"><p id="footer-right">Projekt i wykonanie: AS Media</p></div>
        </footer>
    </body>
</html>