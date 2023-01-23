<?php 
    session_start();
    include('fonction.php');
    $j1 = $_SESSION['j1'];
    $j2 = $_SESSION['j2'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Joueur 1</h5>
    <?php 
        for ($i=0; $i < count($j1); $i++) 
        { 
            // echo $j1[$i]['valeur'] . " " . $j1[$i]['couleur'] . "<br>";

            
        }
    ?>
    <h5>Joueur 2</h5>
    <?php 
        for ($i=0; $i < count($j1); $i++) 
        { 
            // echo $j2[$i]['valeur'] . " " . $j2[$i]['couleur'] . "<br>";
             
        }
        
    ?>
    <br>
    <a href="verifier.php"><button>Verifier</button></a>

    
</body>
</html>

<img src="">