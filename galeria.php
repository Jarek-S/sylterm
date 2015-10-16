<!DOCTYPE html>

<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>Sylterm - ogrzewanie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sylterm.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery.cycle2.min.js"></script>
    </head>
    <body>
        <header id="header" class="w3-container w3-row w3-theme-l1 w3-border-bottom">
            <div class="w3-container w3-third w3-center"><img id="logoSylterm" src="img/logoS.png" alt="logo firmy Sylterm" /></div>
            <div class="w3-container w3-twothird w3-center w3-hide-small"><h1>Dodajemy ciepła</h1></div>
        </header>
        <section id="galeria" class="w3-center w3-theme-l5">
            <h2 id="realizacje">Nasze realizacje</h2>
            <div class="cycle-slideshow"
            data-cycle-fx="scrollHorz"
            data-cycle-speed="500"
            data-cycle-pager="#pager-min"
            data-cycle-pager-template="">
            <div class="cycle-overlay"></div>
<?php
    define('GALERIA_DIR', 'img/galeria/');
    define('DODATKI_DIR', 'img/galeria/min/');
    define('OPISY', 'opisy.txt');
    $fotki = glob(GALERIA_DIR.'*.{jpg,JPG,png,PNG}',GLOB_BRACE);
    $miniaturki = glob(DODATKI_DIR.'*.{jpg,JPG,png,PNG}',GLOB_BRACE);
    $opisy = file(DODATKI_DIR.OPISY, FILE_IGNORE_NEW_LINES);
    for ($i=0; $i<count($fotki); $i++) {            
        echo '<img src="'.$fotki[$i].'" alt="fotka" data-cycle-desc="'.$opisy[$i].'"/>';
    }
    echo '</div>';
    echo '<div id="pager-min" class="cycle-pager external">';
    for ($i=0; $i<count($miniaturki); $i++) {
        echo '<img src="'.$miniaturki[$i].'" alt="fotka mała" />';
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
            <a href="firma.php">
                <div class="w3-third w3-center">
                    <p class="icon"><i class="fa fa-sign-in fa-3x"></i></p>
                    <h2>O firmie</h2>
                    <p>Informacje o nas: co robimy, z kim współpracujemy...</p>
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
