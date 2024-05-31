<?php 

session_start();

if(!isset($_SESSION['prenoms'])){
    $prenom = $_POST['fname'];
    $_SESSION['prenoms'] = $prenom;
}

if(isset($_POST['add']) && isset($_POST['fname'])){
    foreach ($prenom as $key => $value){
    echo $prenom;
  }
}

if(isset($_POST['reset'])){
    $prenom = "";
}



?>


<form action="index.php" method="post">
  <label for="fname">Username</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" name="add" value="Add">
  <label for="fname">Reset</label>
  <input type="submit" name="reset" value="Reset">
</form>