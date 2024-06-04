<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT nom, prenom FROM étudiants WHERE YEAR(naissance) = 1998 OR YEAR(naissance) = 2018");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['nom']) . '</td>
            <td>' . htmlspecialchars($row['prenom']) . '</td>
            <td>' . htmlspecialchars($row['naissance']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>