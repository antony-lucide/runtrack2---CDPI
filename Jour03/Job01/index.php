<?php
$arr = array(
    "str1" => 200,
    "str2" => 204,
    "str3" => 173,
    "str4" => 98,
    "str5" => 171,
    "str6" => 404,
    "str7" => 459,
);

foreach($arr as $num){
    if($num % 2 == 0){
        echo "Even is " . $num . "<br>";
    } else {
        echo "Its odd " . $num . "<br>";
    }
}
?>
