<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Jeu de carte</h4>
    <form action="distribuer.php" method="get">
        <select name="choix" id="">
            <option value="somme">Somme</option>
            <option value="hauteur">Hauteur</option>
            <option value="couleur">Couleur</option>
            <option value="lesDeux">Couleur + Hauteur</option>
             <option value="Poker">Poker</option>
        </select>
        <p>Nombre de carte: <input type="text" name="nombreCarte"></p>
        <input type="submit" value="Valider">
    </form>
</body>
</html>