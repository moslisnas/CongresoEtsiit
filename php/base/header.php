<<<<<<< HEAD
<?php
    $categories=array(
        "Inicio",
        "Inscripción",
        "Ponencias",
        "Actividades",
        "Información",
    );

    $cambiaChars = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
                        'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E','Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 
                        'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 
                        'Ù'=>'U','Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 
                        'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c','è'=>'e', 'é'=>'e', 'ê'=>'e', 
                        'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 
                        'ô'=>'o', 'õ'=>'o','ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 
                        'þ'=>'b', 'ÿ'=>'y' );

    $ponencias = array("ING. SOFTWARE",
                    "INF. GRÁFICA",
                    "BASES DE DATOS",
                    "COMPILADORES",
                    "SIST. OPERATIVOS",
                    "SIST. COMPLEJOS",
                    "INTERF. USUARIO",
                    "TRAB. FIN GRADO",
                    );

    $actividades = array(
        "Sierra Nevada",
        "La Alhambra",
        "Costa Tropical",
        "Sierra de Baza",
        );

    echo '<header>
    <div class="headerContainer">
        <div id="logo"><a href="index.php"><img src="'.$p_folder.'images/logo_ceiie.png" alt="Logotipo"></img></a></div>
        <div id="navcontainer">
            <ul id="navlist">';
                for($i=0;$i < count($categories);$i++){
                    $cat_php = strtolower(strtr($categories[$i],$cambiaChars));
                    if(strcmp($cat_php,"inicio")==0){
                        $cat_php="index";
                    }
                    else{
                        $cat_php="php/".$cat_php;
                    }
                    $cat_php=$p_folder.$cat_php;
                    echo'<li';
                    if($i == $_SESSION['current']){echo' id="active"';}
                    echo'><a href="'.$cat_php.'.php"';
                    if(strcmp($categories[$i],"Ponencias")==0){
                        echo ' onmouseover="mopen(\'categoriasPonencias\')" onmouseout="mclosetime()">';
                        echo $categories[$i].'</a><div class="menu" id="categoriasPonencias" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">';
                        for($j=0;$j<count($ponencias);$j++){
                            echo '<a href="'.$p_folder.'php/ponencias.php?tipo='.$j.'">'.$ponencias[$j].'</a>';
                        }
                    }
                    elseif (strcmp($categories[$i],"Actividades")==0){
                        echo ' onmouseover="mopen(\'categoriasActividades\')" onmouseout="mclosetime()">';
                        echo $categories[$i].'</a><div class="menu" id="categoriasActividades" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">';
                        for($j=0;$j<count($actividades);$j++){
                            echo '<a href="'.$p_folder.'php/actividades.php?tipo='.$j.'">'.$actividades[$j].'</a>';
                        }
                    }
                    else{
                        echo '>'.$categories[$i].'</a>';
                    }
                    echo '</li>';
                }
        echo'</ul>
        </div>
        <div class="clearfloat"></div>
    </div>
    </header>';
?>
=======
<header>
<div class="headerContainer">
    <div id="logo"><a href="index.html"><img src="images/logo_ceiie.png" alt="Logotipo"></img></a></div>
    <div id="navcontainer">
        <ul id="navlist">
            <li id="active"><a href="#">Inicio</a></li>
            <li><a href="inscripcion.html">Inscripción</a></li>
            <li>
                <?php ?><a href="ponencias.html" onmouseover="mopen('categoriasPonencias')" onmouseout="mclosetime()">Ponencias</a>
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
>>>>>>> ab34e2d37d97e435ea3a3a130db465815265b3ca
