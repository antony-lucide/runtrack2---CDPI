<?php

// if(!isset($_COOKIE['prenoms'])){
//     setcookie("prenoms", "0", time() + 20 * 24 * 60 * 60);
//     $_COOKIE['prenoms'] = [];
// }


if(isset($_POST['add']) && isset($_POST['fname'])){
    $_COOKIE['prenoms'] == $_POST['fname'];
    setcookie("prenoms", $_POST['fname'], time() + 20 * 24 * 60 * 60);
}

// if(isset($_POST['fname'] == $prenom)){
//     echo "User already register";
// }

if(!empty($_COOKIE['prenoms'])){
    foreach ($_COOKIE['prenoms'] as $keys){
        echo $keys;
    }
}
?>


<form action="index.php" method="post">
  <label for="fname">Prenom</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" name="add" value="Add">
  <input type="reset" name="reset" value="Reset">
</form>