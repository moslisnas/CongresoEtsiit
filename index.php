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
</html>