<<<<<<< HEAD
<?php
    session_start();
    $_SESSION['current']=2;
    $dir=__DIR__;
    include($_SESSION["dir"]."/php/base/head.php");
    $content='<section class="leftSection">
        <section>
            <h1>Planning de ponencias</h1>
            <p>
                El congreso tratará las distintas áreas de interes de los estudios de Ingeniería Informática. Se contará con un amplio repertorio de charlas que cubren los siguientes apartados:
=======
<section class="leftSection">
        <section>
            <h1>Planning de ponencias</h1>
            <p>
            	El congreso tratará las distintas áreas de interes de los estudios de Ingeniería Informática. Se contará con un amplio repertorio de charlas que cubren los siguientes apartados:
                
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                <ul class="listContainer">
                    <li><a href="#CySI">Computación y Sistemas Inteligentes</a></li>
                    <li><a href="#IC">Ingeniería de Computadores</li>
                    <li><a href="#IS">Ingeniería del Software</li>
                    <li><a href="#SI">Sistemas de Información</a></li>
                    <li><a href="#TI">Tecnologías de la Información</a></li>
                </ul>
            </p>
        </section>
        <section>
            <!-- begin .talks -->
            <div class="talks">
                <div id="talksContent">
                    <table>
                        <tbody>
                            <tr class="separator">
                                <td colspan="2">
                                    <a name=CySI></a>
                                    <b>Computación y Sistemas Inteligentes</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftTD">
<<<<<<< HEAD
                                    <img src="'.$p_folder.'images/ponencia1.jpg" alt="Icono ponencia 1" width="160" height="160">
=======
                                    <img src="images/ponencia1.jpg" alt="Icono ponencia 1" width="160" height="160">
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                                </td>
                                <td class="rightTD">
                                    <p><b>Titulo</b> Titulo indicado</p>
                                    <p><b>Ponente</b> Nombre Apellidos</p>
                                    <p><b>Descripcion</b> La ponencia trata sobre el tema expuesto en este parrafo. El texto que describe la ponencia se especificara con la informacion proporcionada por el ponente.</p>
                                    <p><b>Fecha </b>02 Mayo</p>
                                    <p><b>Hora </b>16:30</p>
                                </td>
                            </tr>
                            <tr class="separator">
                                <td colspan="2">
                                    <a name=IC></a>
                                    <b>Ingeniera de Computadores</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftTD">
<<<<<<< HEAD
                                    <img src="'.$p_folder.'images/ponencia2.jpg" alt="Icono ponencia 2" width="160" height="160">
=======
                                    <img src="images/ponencia2.jpg" alt="Icono ponencia 2" width="160" height="160">
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                                </td>
                                <td class="rightTD">
                                    <p><b>Titulo</b> Titulo indicado</p>
                                    <p><b>Ponente</b> Nombre Apellidos</p>
                                    <p><b>Descripcion</b> La ponencia trata sobre el tema expuesto en este parrafo. El texto que describe la ponencia se especificara con la informacion proporcionada por el ponente.</p>
                                    <p><b>Fecha </b>02 Mayo</p>
                                    <p><b>Hora </b>12:30</p>
                                </td>
                            </tr>
                            <tr class="separator">
                                <td colspan="2">
                                    <a name=IS></a>
                                    <b>Ingenieria del Software</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftTD">
<<<<<<< HEAD
                                    <img src="'.$p_folder.'images/ponencia3.jpg" alt="Icono ponencia 3" width="160" height="160">
=======
                                    <img src="images/ponencia3.jpg" alt="Icono ponencia 3" width="160" height="160">
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                                </td>
                                <td class="rightTD">
                                    <p><b>Titulo</b> Titulo indicado</p>
                                    <p><b>Ponente</b> Nombre Apellidos</p>
                                    <p><b>Descripcion</b> La ponencia trata sobre el tema expuesto en este parrafo. El texto que describe la ponencia se especificara con la informacion proporcionada por el ponente.</p>
                                    <p><b>Fecha </b>02 Mayo</p>
                                    <p><b>Hora </b>14:30</p>
                                </td>
                            </tr>
                            <tr class="separator">
                                <td colspan="2">
                                    <a name=SI></a>
                                    <b>Sistemas de Informacion</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftTD">
<<<<<<< HEAD
                                    <img src="'.$p_folder.'images/ponencia4.jpg" alt="Icono ponencia 4" width="160" height="160">
=======
                                    <img src="images/ponencia4.jpg" alt="Icono ponencia 4" width="160" height="160">
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                                </td>
                                <td class="rightTD">
                                    <p><b>Titulo</b> Titulo indicado</p>
                                    <p><b>Ponente</b> Nombre Apellidos</p>
                                    <p><b>Descripcion</b> La ponencia trata sobre el tema expuesto en este parrafo. El texto que describe la ponencia se especificara con la informacion proporcionada por el ponente.</p>
                                    <p><b>Fecha </b>03 Mayo</p>
                                    <p><b>Hora </b>10:30</p>
                                </td>
                            </tr>
                            <tr class="separator">
                                <td colspan="2">
                                    <a name=TI></a>
                                    <b>Tecnologias de la Informacion</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="leftTD">
<<<<<<< HEAD
                                    <img src="'.$p_folder.'images/ponencia5.jpg" alt="Icono ponencia 5" width="160" height="160">
=======
                                    <img src="images/ponencia5.jpg" alt="Icono ponencia 5" width="160" height="160">
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
                                </td>
                                <td class="rightTD">
                                    <p><b>Titulo</b> Titulo indicado</p>
                                    <p><b>Ponente</b> Nombre Apellidos</p>
                                    <p><b>Descripcion</b> La ponencia trata sobre el tema expuesto en este parrafo. El texto que describe la ponencia se especificara con la informacion proporcionada por el ponente.</p>
                                    <p><b>Fecha </b>02 Marzo</p>
                                    <p><b>Hora </b>12:30</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfloat"></div>
            <!-- end .talks -->
        </section> 
<<<<<<< HEAD
    </section>';
?>
<!DOCTYPE html>
<html>
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
=======
    </section>
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
