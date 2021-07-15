<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include_once ("rectangle_info.php");

    $width = 10;
    $height = 20;
    $rectangle =new Rectangle($width, $height);
    echo ("Width: ".$rectangle->width."<br>");
    echo ("Heigth: ".$rectangle->height."<br>");
    echo ("Perimeter: ".$rectangle->getPerimeter()."<br>");
    echo ("Area: ".$rectangle->getArea()."<br>");
    echo ("Your Rectangle: ".$rectangle->display()."<br>");

?>
</body>
</html>

