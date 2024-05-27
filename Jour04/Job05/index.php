<?php 

$count = 0;
foreach($_POST as $key => $value){
    $count++;
}
    if(isset($_POST['fname']) && isset($_POST['lname'])){
        $username = $_POST['fname'];
        $password = $_POST['lname'];   
    }

if ($username == "John" && $password == "Rambo"){
    echo "C’est pas ma guerre";
} else {
    echo "Votre pire cauchemar";
}

?>

<form action="index.php" method="post">
  <label for="fname">Nom d'utilisateur:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Mot de passe:</label>
  <input type="password" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>