<?php 

$str = "Les choses que l'on possède finissent par nous posséder.";
$offset = ''; 

for ($i = 0; isset($str[$i]); $i++) { 
    
}

for ($i--; $i >= 0; $i--) {
    $offset .= $str[$i];
}

echo $offset; #display it 

?>
