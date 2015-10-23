<!DOCTYPE html>
<html lang="en">
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
        <section>
            <div id="slider" class="cycle-slideshow"
            data-cycle-fx="fadeout"
            data-cycle-speed="1500"
            data-cycle-pager="#pager-min"
            data-cycle-pager-template="">
            <div class="cycle-overlay"></div>
<?php
    define('GALERIA_DIR', 'img/galeria/');
    define('DODATKI_DIR', 'img/galeria/min/');
    define('OPISY', 'opisy.txt');
    $fotki = glob(GALERIA_DIR.'*.{jpg,JPG,png,PNG}',GLOB_BRACE); //uwaga, sortowanie najpierw według kolejności masek
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
    </body>
</html>
