<!DOCTYPE html>

<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>Sylterm - o firmie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Informacje o firmie Sylterm z Polic, zajmującej się instalacjami c.o. i wod-kan">
        <meta name="keywords" content="usługi, ogrzewanie, hydraulika, instalacje, solarne, grzejniki, kaloryfery">
        <meta name="author" content="Jarosław Spirydowicz">
        <base href="http://sylterm.pl/">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="css/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sylterm.css">
    </head>
    <body>
        <header id="header" class="w3-container w3-row w3-theme-l1 w3-border-bottom">
            <div class="w3-container w3-half w3-center"><img src="img/logoS.png" alt="logo firmy Sylterm" /></div>
            <div class="w3-container w3-half w3-hide-small"><h1>Dodajemy trochę ciepła</h1></div>
        </header>
        <section id="oFirmie" class="w3-row">
            <div class="w3-container w3-card-4 w3-theme-l5">
                <div class="w3-half">
                    <h2 class="w3-center">Nasza firma</h2>
                    <p>Działamy na polickim rynku od roku 2011. Wykonujemy instalacje centralnego ogrzewania, wodno-kanalizacyjne i gazowe. Mamy doświadczonych pracowników, zlecenia realizujemy dokładnie i terminowo.</p>
                    <p>Podejmujemy się również drobnych robót, takich jak usuwanie wycieków czy montaż urządzeń sanitarnych. Główną dziedziną naszej działalności są usługi, ale mamy także sklep, w którym każdy może kupić potrzebne mu materiały.</p>
                    <p>Wszystkie oferowane przez nas systemy są objęte gwarancją, której okres może wynosić nawet 10 lat. Jesteśmy przekonani, że profesjonalnym podejściem, zaangażowaniem i uczciwością zapracowaliśmy sobie na dobrą opinię naszych Klientów.</p>
                    <p>Nasze usługi są skrojone na miarę Waszych oczekiwań. Zawsze najpierw poznajemy potrzeby naszych Klientów, a potem proponujemy optymalne rozwiązania. Nam również zależy, abyście byli zadowoleni, a wszystko działało bez zarzutu.</p>
                </div>
                <div class="w3-half">
                    <h2 class="w3-center">Nasza oferta</h2>
                    <ul id="oferta" class="w3-ul w3-small w3-card-4">
                        <li>Instalacje centralnego ogrzewania, wodno-kanalizacyjne i gazowe</li>
                        <li>Przyłącza wodne i gazowe</li>
                        <li>Ogrzewanie podłogowe</li>
                        <li>Systemy solarne</li>
                        <li>Kotłownie gazowe, olejowe, na paliwa stałe (węgiel, miał, drewno)</li>
                        <li>Kominki z płaszczem wodnym</li>
                        <li>Kominki tradycyjne (powietrzne)</li>
                        <li>Zabudowy kominkowe</li>
                        <li>Kosztorysowanie robót instalacyjnych</li>
                        <li>Montaż lub wymiana kotłów i podgrzewaczy gazowych</li>
                        <li>Przydomowe oczyszczalnie ścieków</li>
                        <li>Wkłady kominowe</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="partnerzy" class="w3-row w3-center w3-theme-l5">            
            <h2>Nasi partnerzy</h2>
<?php
    define('LOGOTYPY_DIR', 'img/logotypy/');
    $fotki = glob(LOGOTYPY_DIR.'*.{jpg,JPG,png,PNG}',GLOB_BRACE);
    for ($i=0; $i<count($fotki); $i++) {            
        echo '<img src="'.$fotki[$i].'" alt="logo" />';
    }
?>
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
            <div class="w3-half"><p id="footer-right">Projekt i wykonanie: JSpirydowicz</p></div>
        </footer>
    </body>
</html>