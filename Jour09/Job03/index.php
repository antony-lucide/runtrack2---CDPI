<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db, "SELECT id, prenom, nom, naissance, sexe, email FROM étudiants WHERE sexe = 'Femme'");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['id']) . '</td>
            <td>' . htmlspecialchars($row['prenom']) . '</td>
            <td>' . htmlspecialchars($row['nom']) . '</td>
            <td>' . htmlspecialchars($row['naissance']) . '</td>
            <td>' . htmlspecialchars($row['sexe']) . '</td>
            <td>' . htmlspecialchars($row['email']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>