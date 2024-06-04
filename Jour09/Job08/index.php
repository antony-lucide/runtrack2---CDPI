<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT SUM(superficie) AS capacite_total FROM etage");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['capacite_total']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>