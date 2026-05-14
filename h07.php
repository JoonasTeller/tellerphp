<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mdea Telleri seiklused</title>
</head>
<body>
    
<h2>Tervitus</h2>

    <?php
	    function tervita(){
		    return "Tere päiksekesekene";	
	    }
	    echo tervita();
    ?>

<h2>Liitu uudiskirjaga</h2>

    <!-- Liitu uudiskirjaga -->
    <!-- koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp) -->
    <?php
        function looUudiskirjaVorm() {
            echo '<form class="d-flex gap-2"><input type="email" class="form-control w-auto" placeholder="Email"><button type="submit" class="btn btn-primary">Liitu</button></form>';
        }

        looUudiskirjaVorm();
    ?>

<h2>Kasutajanimi ja email</h2>

<!-- Kasutajanimi ja email
loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
täienda koodi nii, et luuakse tähed ja numbrid läbisegamini -->
<div class="container mt-5">
    
    <form method="POST" class="row g-2 mb-4">
        <div class="col-auto">
            <input type="text" name="kasutaja_nimi" class="form-control" placeholder="Sisesta nimi..." required>
        </div>
        <div class="col-auto">
            <button type="submit" name="loo" class="btn btn-success">Genereeri andmed</button>
        </div>
    </form>

    <?php
    function looKasutaja($nimi) {
        $kasutaja = strtolower($nimi);
        $email = $kasutaja . "@hkhk.edu.ee";
        $kood = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 7);

        echo "<div class='card p-3 shadow-sm' style='max-width: 400px;'>";
        echo "<strong>Kasutaja:</strong> $kasutaja <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Kood:</strong> <code class='text-primary'>$kood</code>";
        echo "</div>";
    }

    if (isset($_POST['loo'])) {
        $sisestatud_nimi = $_POST['kasutaja_nimi'];
        looKasutaja($sisestatud_nimi);
    }
    ?>
</div>
    
</body>
</html>