<?php 

$str = "Les choses que l'on possède finissent par nous posséder.";
$offset = ''; 

for ($i = 0; isset($str[$i]); $i++) { #Travel through to the loop
    
}

for ($i--; $i >= 0; $i--) { #reverse the loop
    $offset .= $str[$i]; #concatenate
}

echo $offset; #display it 

?>
