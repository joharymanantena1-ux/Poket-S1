<?php 
    function estDedans($carte, $leTab)
    {
        for ($i=0; $i < count($leTab); $i++) { 
                if ($leTab[$i] == $carte) {
                    return TRUE;
                    break;
                }
        }
        return FALSE;
    }
    function dejaPrise($carte, $joueur1, $joueur2)
    {
        if (estDedans($carte, $joueur1)) {
            return TRUE;
        }else if(estDedans($carte, $joueur2)){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    function ajouter($carte, $joueur1, $joueur2){
        for ($i=0; ; $i++) { 
            $ind = rand(0, 51);
            if (!dejaPrise($carte[$ind], $joueur1, $joueur2)) {
                // echo $ind;
                $joueur1 = $carte[$ind];
                
                break; 
            }
        }
        return $joueur1;
    }
    function distribuer($nombre, $joueur1, $joueur2, $carte)
    {
        $valiny = array();
        for ($i=0; $i < $nombre; $i++) { 
            $joueur1[] = ajouter($carte, $joueur1, $joueur2);
            $joueur2[] = ajouter($carte, $joueur2, $joueur1);
            // var_dump($joueur1);
        }
        
        $valiny[0] = $joueur1;
        $valiny[1] = $joueur2;
        return $valiny;
    }
    // function somme($joueur)
    // {
    //     $valiny = 0;
    //     for ($i=0; $i < count($joueur); $i++) { 
    //         $valiny = $valiny + $joueur[$i]['nombre'];
    //     }
    //     return $valiny;
    // }
    // function quiGagne($joueur1, $joueur2)
    // {
    //     if ($joueur1 > $joueur2) {
    //         return 2;
    //     }else if($joueur1 < $joueur2){
    //         return 1;
    //     }else
    //     {
    //         return 3;
    //     }
    // }
    // function getPlusGrand($joueur)
    // {
    //     $PG = $joueur[0];
    //     for ($i=1; $i < count($joueur); $i++) { 
    //         if ($PG['hauteur'] < $joueur[$i]['hauteur']) {
    //             $PG = $joueur[$i];
    //         }
    //     }
    //     return $PG;
    // }
    // function comparer($joueur1, $joueur2)
    // {
    //     if ($joueur1['hauteur'] > $joueur2['hauteur']) {
    //         return 1;
    //     }else if ($joueur2['hauteur'] > $joueur1['hauteur']) {
    //         return 2;
    //     }else {
    //         return 3;
    //     }
    // }
    // function compterCouleur($joueur)
    // {
    //     $couleur = array();
    //     $couleur = array(
    //         'trefle' => 0,
    //         'pique' => 0,
    //         'careau' => 0,
    //         'coeur' => 0,
    //     );
    //     for ($i=0; $i < count($joueur); $i++) { 
    //         if ($joueur[$i]['couleur'] == 'trefle') {
    //             ++$couleur['trefle'];
    //         }else if ($joueur[$i]['couleur'] == 'pique') {
    //             ++$couleur['pique'];
    //         }else if ($joueur[$i]['couleur'] == 'careau') {
    //             ++$couleur['careau'];
    //         }else if ($joueur[$i]['couleur'] == 'coeur') {
    //             ++$couleur['coeur'];
    //         }
    //     }
    //     return $couleur;

    // }
    
    // function getCouleurGrand($couleur) // Return int
    // {
    //     $PG = $couleur['trefle'];
    //     if ($PG < $couleur['pique']) {
    //         $PG = $couleur['pique'];
    //     }
    //     if ($PG < $couleur['careau']) {
    //         $PG = $couleur['careau'];
    //     }if ($PG < $couleur['coeur']) {
    //         $PG = $couleur['coeur'];
    //     }
    //     return $PG;
    // } 
    
    // function comparerCouleur($couleur1, $couleur2)
    // {
    //     if($couleur1 > $couleur2)
    //     {
    //         return 1;
    //     }else if ($couleur1 < $couleur2) {
    //         return 2;
    //     }else {
    //         return 3;
    //     }
    // }
    
?>