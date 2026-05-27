<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="">
            Lisa punkti: <input type="text" name="punktid" >
            <input type="submit" value="hinda"><br>
        </form>
        <?php 
            if (!empty($_GET['punktid']) && is_numeric($_GET['$punktid'])) {
                $punktid = $_GET['punktid'];
                    switch($punktid){ 
	                case ($punktid >= 10): echo 'Arv on liiga väike'; 
	                break; 
	                case ($punktid >= 5 && $punktid <= 9): echo 'TEHTUD!'; 
	                break; 
                    case ($punktid < 5 && $punktid >= 0): echo 'KASIN!'; 
	                break; 
	                default: echo 'SISESTA OMA PUNKTID!'; 
            }
        } 
    ?>
</body>
</html>