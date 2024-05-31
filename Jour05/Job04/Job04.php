<?php 
$count = 0;
foreach($_POST as $key => $value){
    $count++;
}

$argument = "";
$valeur = "";

if(isset($_POST['fname'])||isset($_POST['lname']) == 'lname'){
    $argument = $_POST['fname'];
    $valeur = $_POST['lname'];
}

echo "<table>
<thead>
    <tr>
        <th>Surnom</th>
        <th>Prénom</th>
        <th>Nom</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{$argument}</td>
        <td>{$valeur}</td>
        <td>{$count}</td>
    </tr>
</tbody>
</table>";
?>



<form action="index.php" method="post">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>