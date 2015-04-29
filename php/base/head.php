<?php
    $p_folder="";
    if (strcmp($_SESSION["dir"],$dir)!=0){
        $p_folder ="../";
    }

    $references_CSS = array(
        "main",
        "styles",
        "boxes",
        "images",
        "forms",
        );

    $references_js = array(
        "form",
        "menu",
        "slider",
        );

echo'
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso ETSIIT - Inicio</title>
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Belgrano" rel="stylesheet" type="text/css">';
    for($i=0;$i<count($references_CSS);$i++){
        if(!((($i==1 or $i==4 ) and $_SESSION["current"]==3) || ($i==4  and $_SESSION["current"]==2)))
        echo "<link href=\"".$p_folder."CSS/".$references_CSS[$i].".css\" rel=\"stylesheet\" type=\"text/css\" />";

    }
    for($i=0;$i<count($references_js);$i++){
        if($_SESSION['current']==1 and $i==0){
            echo "<script src=\"".$p_folder."js/".$references_js[$i].".js\" type=\"text/javascript\"/></script>";
        }
        if ($i!=0)
            echo "<script src=\"".$p_folder."js/".$references_js[$i].".js\" type=\"text/javascript\"/></script>";
    }
    
echo '</head>';
?>