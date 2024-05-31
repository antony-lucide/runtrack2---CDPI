<?php 

function gras($str){
    if(!empty($_POST)){
        global $str;
        $str = $_POST['fname'];
    }
    

}

?>



<form action="index.php" method="post">
  <label for="fname">Majuscule</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form>