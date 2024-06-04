<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db, "SELECT prenom FROM étudiants WHERE prenom LIKE 'T%'");
while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['prenom']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>