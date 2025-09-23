<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first PHP files</h1>
    <?php
    $x=10;
    $y=11;
    $x =$_GET["x"];
    $y =$_GET["y"];
    echo "x+y: " . ($x+$y) . "<br/>";
    echo "x == y: " . ($x==$y) . "<br/>";
    ?>
</body>
</html> 