<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT salles.nom AS salle_nom, etages.nom AS etage_nom 
FROM salles 
JOIN etages ON salles.etage_id = etages.id");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['salle_nom']) . '</td>
            <td>' . htmlspecialchars($row['etage_nom']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>