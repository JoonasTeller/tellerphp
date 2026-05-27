<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mdea</title>
</head>
<body>
    <h2>1. Genereeri</h2>
    <?php
	    for($nr=1;$nr<=100;$nr++){
		    echo $nr.'. ';
        if ($nr % 10 === 0) {
            echo '<br>'; 
        }
    }

    echo '<br>';
?>

    <h2>2. Rida I</h2>

    <?php

        for($rida=1; $rida<=10; $rida++){ 
	        echo '*<br>';
    }
?>
    <h2>3. Rida II</h2>
    <?php
	    for($veerg=1; $veerg<=10; $veerg++){ 
			echo '*';	
		}
    echo '<br>';
?>

    <h2>4. Ruut</h2>

    <?php
        function TärnideArv() {
            echo '<form class="d-flex gap-2"><input type="Tärnid" class="form-control w-auto" placeholder="Sisesta tärnide arv"><button type="submit" class="btn btn-primary">Genereeri</button></form>';
        }

        TärnideArv();

        for($rida=1; $rida<=5; $rida++){ 
	    for($veerg=1; $veerg<=5; $veerg++){ 
			echo '*';	
		}
	    echo '<br>';
    }
    echo '<br>';
?>

    <h2>5. Kahanev</h2>

    <?php
        for ($nr2 = 10; $nr2 >= 1; $nr2--) {
            echo $nr2 . "<br>";
    }
    echo '<br>';
?>

    <h2>6. Kolmega jagunevad</h2>

    <?php

        for ($nr3 = 1;$nr3<= 100;$nr3++) {
            if ($nr3 % 3 === 0) {
                echo $nr3."<br>";
    }
}
?>
</body>
</html>