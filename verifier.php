<?php 
    session_start();
    include('fonction.php');
    $choix = $_SESSION['choix'];
    $j1 = $_SESSION['j1'];
    $j2 = $_SESSION['j2'];
    $couleurJ1 = compterCouleur($j1);
    $couleurJ2 = compterCouleur($j2);
    if ($choix == "somme") {
        if (quiGagne(somme($j1), somme($j2)) == 1) {
            echo "Joueur 2 Gagne";
        }else if (quiGagne(somme($j1), somme($j2)) == 2) {
            echo "Joueur 1 Gagne";
        }else if(quiGagne(somme($j1), somme($j2)) == 3){
            echo "Egalite";
        }
    }else if ($choix == "hauteur") {
        if ( comparer(getPlusGrand($j1), getPlusGrand($j2)) == 1 ) {
            echo "Joueur 1 Gagne";
        }else if ( comparer(getPlusGrand($j1), getPlusGrand($j2)) == 2 ) {
            echo "Joueur 2 Gagne";
        }else{
            echo "Egalite";
        }
    }else if ($choix == "couleur") {
        if (comparerCouleur(getCouleurGrand($couleurJ1), getCouleurGrand($couleurJ2)) == 1) {
            echo "Joueur 1 Gagne";
        }else if (comparerCouleur(getCouleurGrand($couleurJ1), getCouleurGrand($couleurJ2)) == 2) {
            echo "Joueur 2 Gagne";
        }else{
            echo "Egalite";
        }
    }

    

?>
<br>
<a href="index.php"><button>Rejouer</button></a>