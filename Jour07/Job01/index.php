<?php 
session_start();

if(isset($_POST['reset'])){
    $_SESSION['nbvisites'] = 0;
}

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] ++;
} else {
    $_SESSION['nbvisites'] +=1;
}

?>

<?php echo "nbvisite" . $_SESSION['nbvisites'];?>

<form action="index.php" method="post">
  <input type="submit" name="reset" value="Submit">
</form>