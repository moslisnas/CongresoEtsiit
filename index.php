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
</html>