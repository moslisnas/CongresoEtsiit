<<<<<<< HEAD
<?php 
    session_start();
    $_SESSION["current"]=3;
    $dir=__DIR__;
    include($_SESSION["dir"]."/php/base/head.php");

    $activities = array(
            '<li><div class="imgAlignCenter">
                    <img src="'.$p_folder.'images/banner1.jpg" alt="Sierra Nevada"></img></div><h4>Subida a Sierra Nevada</h4><h4 class="under">Fecha: 05/05/2015 (9:00-17:30)</h4><h4 class="under">Precio: 24 €</h4>
                    <p>
                        Sierra Nevada es uno de los grandes atractivos de Granada. Ofrece unas vistas incomparables del paisaje de la región.
                    </p>
                    <button>¡Apuntarse!</button>
                </li>',
            '<li><div class="imgAlignCenter">
                    <img src="'.$p_folder.'images/banner2.jpg" alt="Alhambra"></img></div><h4>Visita a la Alhambra</h4><h4 class="under">Fecha: 05/06/2015 (9:00-14:00)</h4><h4 class="under">Precio: 20 €</h4>
                    <p>
                        La Alhambra es una ciudad palatina andalusí situada en Granada, España. Es un rico complejo palaciego y fortaleza (alcázar o al-qasr القصر) que alojaba al monarca y a la corte del Reino nazarí de Granada. Su verdadero atractivo, como en otras obras musulmanas de la época, no sólo radica en los interiores, cuya decoración está entre las cumbres del arte andalusí, sino también en su localización y adaptación, generando un paisaje nuevo pero totalmente integrado con la naturaleza preexistente. En 2011 se convirtió en el monumento más visitado de España, recibiendo la cifra histórica de 2 310 764 visitantes.
                    </p>
                    <button>¡Apuntarse!</button>
                </li>',
            '<li><div class="imgAlignCenter">
                    <img src="'.$p_folder.'images/banner3.jpg" alt="Playa: Almuñécar"></img></div><h4>Bajada a la playa</h4><h4 class="under">Fecha: 08/05/2015 (11:00-19:00)</h4><h4 class="under">Precio: 35 €</h4>
                    <p>
                        Almuñécar cuenta con diecinueve kilómetros de costa en la que destacan quince playas: la mayoría constan de todos los servicios; destacan las playas de Velilla, San Cristóbal y La Herradura, que ostentan el galardón de Q de calidad, máxima distinción del ICTE. Existen además típicas calas recónditas de la costa de Andalucía Oriental, e incluso playas nudistas. En ellas se practican actividades acuáticas como el submarinismo o la pesca, siendo el paraje de Cerro Gordo-Maro uno de los principales atractivos turísticos del municipio debido a su belleza y conservación. Es habitual celebrar a lo largo de la costa sexitana la festividad de San Juan, en la que el bollo de aceite homónimo, el fuego y los buenos deseos son protagonistas de una noche mágica. 
                    </p>
                    <button>¡Apuntarse!</button>
                </li>',
                '<li><div class="imgAlignCenter">
                    <img src="'.$p_folder.'images/banner4.jpg" alt="Sierra de Baza"></img></div><h4>Excursión a la Sierra de Baza</h4><h4 class="under">Fecha: 06/05/2015 (11:00-19:00)</h4><h4 class="under">Precio: 21 €</h4>
                    <p>
                        El Parque Natural de la Sierra de Baza está situado al nordeste de la provincia de Granada, limitando con la provincia de Almería y formando con los relieves de las Sierras de Filabres la continuación hacia el este de las cordillera béticas. Ubicado en un entorno semiárido de la Hoya de Baza, y caracterizado por unas precipitaciones escasas y de distribución irregular, se eleva el macizo montañoso de la Sierra de Baza hasta superar los 2.200 msnm, siendo el Calar de Santa Bárbara con 2.269 msnm la cumbre de este Parque Natural, que fue declarado espacio natural protegido por la Ley 2/1989, de 18 de julio, por la que se aprueba el Inventario de Espacios Naturales Protegidos de Andalucía y se establecen medidas adicionales para su protección, contando con una extensión total de 53.649 ha, distribuida entre los términos municipales de Baza, Dólar, Gor, Caniles y Valle de Zalabí.
                    </p>
                    <button>¡Apuntarse!</button>
                </li>',
        );

    function build_activities(){
        global $activities;
        $resultado='<section class="leftSection">
        <h1>Listado de actividades propuestas</h1>
        <!-- begin .boxesActivities -->
        <div class="boxesActivities">
            <ul>';
        if(isset($_GET['tipo'])){
            $resultado=$resultado.$activities[$_GET['tipo']];
        }
        else{
            for($i=0;$i<count($activities);$i++){
                $resultado=$resultado.$activities[$i];
            }
        }
        $resultado=$resultado.'</ul>
        </div>
        <!-- end .boxesActivities -->
    </section>';
    return $resultado;
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            include($_SESSION["dir"]."/php/base/header.php");
            echo '<div class="container">';
            $content = build_activities();
            echo $content;
            include($_SESSION["dir"]."/php/base/rightSection.php");
            echo '</div><div class="bottomSpace"></div>';
        include($_SESSION["dir"]."/php/base/footer.php");
        ?>
    </body>
</html>
=======
<div class="container">
    <section class="leftSection">
        <h1>Listado de actividades propuestas</h1>
        <!-- begin .boxesActivities -->
        <div class="boxesActivities">
        	<ul>
            	<li><div class="imgAlignCenter">
                	<img src="images/banner1.jpg" alt="Sierra Nevada"></img></div><h4>Subida a Sierra Nevada</h4>
                    <p>
                    	Sierra Nevada es uno de los grandes atractivos de Granada. Ofrece unas vistas incomparables del paisaje de la región.
                    </p>
                </li>
                <li><div class="imgAlignCenter">
                	<img src="images/banner2.jpg" alt="Alhambra"></img></div><h4>Visita a la Alhambra</h4>
                    <p>
                    	La Alhambra es una ciudad palatina andalusí situada en Granada, España. Es un rico complejo palaciego y fortaleza (alcázar o al-qasr القصر) que alojaba al monarca y a la corte del Reino nazarí de Granada. Su verdadero atractivo, como en otras obras musulmanas de la época, no sólo radica en los interiores, cuya decoración está entre las cumbres del arte andalusí, sino también en su localización y adaptación, generando un paisaje nuevo pero totalmente integrado con la naturaleza preexistente. En 2011 se convirtió en el monumento más visitado de España, recibiendo la cifra histórica de 2 310 764 visitantes.
                    </p>
                </li>
                <li><div class="imgAlignCenter">
                	<img src="images/banner3.jpg" alt="Playa: Almuñécar"></img></div><h4>Bajada a la playa</h4>
                    <p>
                    	Almuñécar cuenta con diecinueve kilómetros de costa en la que destacan quince playas: la mayoría constan de todos los servicios; destacan las playas de Velilla, San Cristóbal y La Herradura, que ostentan el galardón de Q de calidad, máxima distinción del ICTE. Existen además típicas calas recónditas de la costa de Andalucía Oriental, e incluso playas nudistas. En ellas se practican actividades acuáticas como el submarinismo o la pesca, siendo el paraje de Cerro Gordo-Maro uno de los principales atractivos turísticos del municipio debido a su belleza y conservación. Es habitual celebrar a lo largo de la costa sexitana la festividad de San Juan, en la que el bollo de aceite homónimo, el fuego y los buenos deseos son protagonistas de una noche mágica. 
                    </p>
                </li>
                <li><div class="imgAlignCenter">
                	<img src="images/banner4.jpg" alt="Sierra de Baza"></img></div><h4>Excursión a la Sierra de Baza</h4>
                    <p>
                    	El Parque Natural de la Sierra de Baza está situado al nordeste de la provincia de Granada, limitando con la provincia de Almería y formando con los relieves de las Sierras de Filabres la continuación hacia el este de las cordillera béticas. Ubicado en un entorno semiárido de la Hoya de Baza, y caracterizado por unas precipitaciones escasas y de distribución irregular, se eleva el macizo montañoso de la Sierra de Baza hasta superar los 2.200 msnm, siendo el Calar de Santa Bárbara con 2.269 msnm la cumbre de este Parque Natural, que fue declarado espacio natural protegido por la Ley 2/1989, de 18 de julio, por la que se aprueba el Inventario de Espacios Naturales Protegidos de Andalucía y se establecen medidas adicionales para su protección, contando con una extensión total de 53.649 ha, distribuida entre los términos municipales de Baza, Dólar, Gor, Caniles y Valle de Zalabí.
                    </p>
                </li>
            </ul>
        </div>
        <!-- end .boxesActivities -->
    </section>
</div>
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
