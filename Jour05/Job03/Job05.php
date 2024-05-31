<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$dic = ["Consonnes" => 0,
        "Voyelles" => 0,
       ];

$isvoyelle = false;
$isconsonne = false;

for ($i = 0;  isset($str[$i]); $i++) { 

    if($str[$i] >= "A" && $str[$i] <= "z" || $str[$i] >= "A" && $str[$i] <= "Z"){
        for($j = 0; isset($voyelles[$j]); $j++)
            if($str[$i] == $voyelles[$j]){
                $isvoyelle = true;
                break;
            }
    }

    if($isvoyelle){
        $dic["Voyelles"]++;
    } else{
        $dic["Consonnes"]++;
    }
}


?>




<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels and Consonants</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Type</th>
            <th>Count</th>
        </tr>
        <?php foreach ($dic as $key => $value) { ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>