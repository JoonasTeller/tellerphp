<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armin on alkohoolik</title>
</head>
<body>
    <h1>harjutus 02</h1>
    <form action="" method="get">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        h: <input type="number" name="h"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
        if (!empty($_GET)) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $h = $_GET['h'];
            $s = (($a+$b)/2) * $h;
            echo "Trapetsi pindala on: ".$s."<br>";
        }
    ?>

</body>
</html>