<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus01</h1>
<p>
    <?php
        //Propeller (Teller)
        //Harjutus 1
        //Vaata ette Mario....
        $nimi = "Joonas";
        $aasta = 2009; //newgen
        $kuju = "aries";
        echo $nimi."<br>".$aasta."<br>".$kuju;
        echo "<br>";
        echo "\"It's my life\" - Dr. Alban<br>";
        echo '(\(\<br>';
        echo '( -.-)<br>';
        echo 'o_(")(")';
    ?>
</p>

<h2>Harjutus 2</h2>
    <?php
    $arv1 = 5;
    $arv2 = 6;
    
    echo $arv1." + ".$arv2." = ".$arv1+$arv2." <br> ";
    echo $arv1." - ".$arv2." = ".$arv1-$arv2." <br> ";
    echo $arv1." * ".$arv2." = ".$arv1*$arv2." <br> ";
    echo $arv1." / ".$arv2." = ".$arv1/$arv2." <br> ";
    ?>
</body>
</html>
