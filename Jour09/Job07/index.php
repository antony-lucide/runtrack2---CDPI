<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT SUM(capacite) AS total FROM salles");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['total']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>