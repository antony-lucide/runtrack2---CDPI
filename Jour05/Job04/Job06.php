<?php 

$count = 0;
foreach($_POST as $key => $value){
    $count++;
}

$nombre = 0;

if(!empty($_POST)){
    $nombre = $_POST['fname'];
}

if($nombre % 2 == 0){
    echo "Nombre pair";
} else {
    echo "impair";
}

?>

<form action="index.php" method="post">
  <label for="fname">Nombre</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form>