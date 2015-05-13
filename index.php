<<<<<<< HEAD
<?php
    session_start();
    $_SESSION["dir"]=__DIR__;
    $dir=__DIR__;
    $_SESSION["current"]=0;
    include($_SESSION["dir"]."/php/base/head.php");
    $content = '<section class="leftSection">
            <h1>Congreso de Estudiantes de Ingeniería Informática de España </h1><h2>1ª Edición</h2>
            <p>
                Para todos aquellos estudiantes y personas interesadas en innovación, investigación, desarrollo de la informática, os recomendamos que acudáis, en Granada, a este evento. Habrá exposiciones por parte de profesionales del ámbito universitario los cuáles compartirán sus experiencias y explicarán que hay que hacer para ser un buen ingeniero en informática y otros aspectos de ámbito profesional.
            </p>
            <div class="boxes">
                <img class="bigImg" src="images/inicio1.jpg" alt="Colaboradores">
            </div>

            <p>
                Además, a través de nuestras actividades, habrá a vuestra disposición tecnologías muy modernas, tales como dispositivos wereables, pantallas hológráficas 3D, nuevos modos de interactuación como dispositivos lectores de retina, entre otras muchas cosas.
            </p>

            <div class="boxes">
                <img class="bigImg" src="images/inicio2.jpg" alt="Tecnologías">
            </div>

            <div class="clearfloat"></div>

            <p>
                No olvides <a href="inscripcion.html">registrarte</a> y disfrutar de este evento único.
            </p>
        </section>';
?>
<!DOCTYPE html>
<html>
    <?php
        if(isset($$_SESSION["current"])){
            $_SESSION["current"]=0;
        }
    ?>
    <body>
        <?php
        include($_SESSION["dir"]."/php/base/header.php");
        echo '<div class="container">';
        echo $content;
        include($_SESSION["dir"]."/php/base/rightSection.php");
        echo '</div><div class="bottomSpace"></div>';
        include($_SESSION["dir"]."/php/base/footer.php");
        ?>
    </body>
=======
<!DOCTYPE HTML>
<!--
Design by Free Responsive Templates
http://www.free-responsive-templates.com
Released for free under a Creative Commons Attribution 3.0 Unported License (CC BY 3.0) 
-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso ETSIIT - Inicio</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
    <link href="CSS/main.css" rel="stylesheet" type="text/css" />
    <link href="CSS/boxes.css" rel="stylesheet" type="text/css" />
    <link href="CSS/images.css" rel="stylesheet" type="text/css" />
    <link href="CSS/styles.css" rel="stylesheet" type="text/css" />
    <link href="CSS/forms.css" rel="stylesheet" type="text/css" />
    <script src="js/menu.js" type="text/javascript"/></script>
    <script src="js/slider.js" type="text/javascript"/></script>
</head>

<?php
include_once 'initialize.php';

function contentLoader(){
    
}
?>

<body>
    <?php

    $base = dirname( __FILE__ );
    include($base."/php/base/header.php");
    include($base."/php/main.php");   
    include($base."php/base/footer.php");
    ?>
</body>
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
</html>