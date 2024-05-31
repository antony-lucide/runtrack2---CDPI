<?php 



$count = 0;
foreach ($_GET as  $key => $value){
    $count++;
}


echo "<table>
<thead>
    <tr>
        <th>Compteur</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{$count}</td>
    </tr>
</tbody>
</table>";
?>

<form action="index.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form> 

