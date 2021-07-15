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
    include("class_lib.php");
    /*$tung = new Person();
    $tung->setName("Bui Thanh Tung");
    echo "Tung's full name: " . $tung->getName();*/
    /*echo "Tung's full name: " . $tung->name;*/
    $tu = new Person("Nguyen Thi Anh Tu");
    echo "Tu's full name: ".$tu->getName();
?>
</body>
</html>