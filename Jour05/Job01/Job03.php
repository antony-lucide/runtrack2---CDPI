<?php 

$int = 3;
$str = "String";
$float = 0.4;
$bool = true;


echo "<table>
<thead>
    <tr>
        <th>String</th>
        <th>Virgule</th>
        <th>Boolean</th>
        <th>Integer</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{$str}</td>
        <td>{$float}</td>
        <td>{$bool}</td>
        <td>{$int}</td>
    </tr>
</tbody>
</table>";
?>