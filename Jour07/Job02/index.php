<?php
if (isset($_POST['reset'])) {
    setcookie("nbvisites", "0", time() + 20 * 24 * 60 * 60);
    $_COOKIE['nbvisites'] = 0;
} else {
    if (isset($_COOKIE['nbvisites'])) {
        $_COOKIE['nbvisites']++;
    } else {
        $_COOKIE['nbvisites'] = 1;
    }
    setcookie("nbvisites", $_COOKIE['nbvisites'], time() + 20 * 24 * 60 * 60);
}
?>

<?php echo "nbvisites: " . $_COOKIE['nbvisites']; ?>

<form action="index.php" method="post">
    <input type="submit" name="reset" value="Reset">
</form>
