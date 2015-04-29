<?php
$base = dirname( __FILE__ );
<header>
    <div class="headerContainer">
        <div id="logo"><a href="index.html"><img src="../../images/logo_ceiie.png" alt="Logotipo"></img></a></div>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active"><a href="#">Inicio</a></li>
                <li><a href="inscripcion.html">Inscripción</a></li>
                <li>
                    <a href="ponencias.html" onmouseover="mopen('categoriasPonencias')" onmouseout="mclosetime()">Ponencias</a>
                    <div class="menu" id="categoriasPonencias" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                    <a href="ponencias.html#CySI">Sist. Inteligentes</a>
                    <a href="ponencias.html#IC">Ing Comp.</a>
                    <a href="ponencias.html#IS">Ing. Software</a>
                    <a href="ponencias.html#SI">Sist. Inform.</a>
                    <a href="ponencias.html#TI">Tecn. Inform.</a>
                </li>
                <li><a href="actividades.html">Actividades</a></li>
                <li><a href="informacion.html">Información</a></li>
            </ul>
        </div>
        <div class="clearfloat"></div>
    </div>
</header>
?>