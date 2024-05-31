<?php


$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$conc = '';

for ($i = 0; isset($str[$i]); $i++) {
    $isVoyelle = false;

    // Vérifier si le caractère actuel est une voyelle
    for ($j = 0; isset($voyelles[$j]); $j++) {
        if ($str[$i] == $voyelles[$j]) {
            $isVoyelle = true;
            break;
        }
    }

    // Ajouter le caractère à $conc s'il est une voyelle
    if ($isVoyelle) {
        $conc .= $str[$i];
    }
}

// Afficher le résultat
echo "Les voyelles dans la chaîne sont : " . $conc;


?>