<?php
$count = 0;
$argument = "";
$valeur = "";

foreach ($_GET as $key => $value) {
    if ($key == 'fname') {
        $argument = $value;
    } elseif ($key == 'lname') {
        $valeur = $value;
    }
    $count++;
}

echo "<table>
<thead>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
        <th>Count</th>
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

<!-- HTML form for submitting data via GET method -->
<form action="index.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>
