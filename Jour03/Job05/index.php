<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$dic = {"Consonnes" => 0,
        "Voyelles" => 0;
       };

$count = 0;
$isvoyelle = false;
$isconsonne = false;

for ($i = 0; $i < $str[$i]; $i++) {
   $count++;
}

for($j = 0; isset($voyelles[$j]); $j++){
    if($str[$count] == $voyelles[$j]){
        $isvoyelle = true;
        break;
    }
}
?>


<?php 
foreach ($dic as $keys => $value){
    echo "<tr>
            <td>$key</td>
            <td>$value[$count]</td> 
          </tr>";
}?>
