<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armin on alkohoolik</title>
</head>
<body>
    <h1>harjutus 04</h1>
    <form action="" method="get">
        Aasta: <input type="number" name="aasta"><br>
        <input type="submit" value="Leia juubel">
    </form>
    <?php
        if (!empty($_GET['aasta'])) {
            $aasta = $_GET['aasta']
            $vanus = 2026 - $aasta
            if ($vanus % 5  == 0) {
                echo "Sul on juubeliaasta<br>";
            }
        }
    ?>
</body>
</html>