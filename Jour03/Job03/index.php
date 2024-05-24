<?php 

// $str = "I'm sorry Dave I'm afraid I can't do that";
// $voyelle = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
// $count = 0;
// $countstr = 0;
// $isvalid = false;
// $conc = '';
// for($count = 0; isset($str[$count]); $count++){
//     for($i = 0; $i < $str; $str++){
//         for($countstr = 0; isset($voyelle[$countstr]); $countstr++){
//             for($x = 0; $x < $voyelle; $voyelle++){
//                 $conc = $conc . $voyelle;
//                 if($str[$count] ==  $voyelle[$countstr]){
//                     $isvalid = true;
//                     break;
//                 }
//             }
//             @var_dump($voyelle);
//             var_dump($countstr);
//         }
//     } // parcours de str
//     echo $count;
//     var_dump($count);
//     // while($str == isset($count(($voyelle)){
//         continue;

//     // echo $str[$i] . $voyelle;
 

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