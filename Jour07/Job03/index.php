<?php 

session_start();

//if session is null, create a new one
if(!isset($_SESSION['prenoms'])){
    $_SESSION['prenoms'] = [];
}
//if add isn't null and the text bar isn't null, ge the post form and specify who is it with sessions
if(isset($_POST['add']) && isset($_POST['fname'])){
    $prenom = $_POST['fname'];
    $_SESSION['prenoms'][] = $prenom;
}

//reset the session
if(isset($_POST['reset'])){
    $_SESSION['prenoms'] = [];
}

//if session isn't empty iterate on sessions "prenoms" and echo it
if(!empty($_SESSION['prenoms'])){
  foreach($_SESSION['prenoms'] as $name){
    echo $name . "<br/>";
  }
}


?>


<form action="index.php" method="post">
  <label for="fname">Username</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" name="add" value="Add">
  <label for="fname">Reset</label>
  <input type="submit" name="reset" value="Reset">
</form>