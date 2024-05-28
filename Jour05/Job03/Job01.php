<?php 

$tab = [200,  204,  173, 98,  171,  404,  459];
for($i = 0; isset($tab[$i]); $tab[$i++]){
    if($tab[$i] % 2 == 0){
        echo $tab[$i] . "Est pair <br/>";
    } else {
        echo $tab[$i] . "Est Impair <br/>";
    }
}

?>