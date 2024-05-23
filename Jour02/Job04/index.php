<?php 
for($i = 0; $i < 100; $i++){ 
    if( $i % 5 === 0){
        echo "Buzzs";
    } elseif($i % 3 === 0){
        echo "Fizz";
    }elseif($i % 5 === 0 && $i % 3 === 0){
        echo "FizzBuzz";
    } else{
        echo $i . "<br/>";
    }

}

?>