<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT AVG(capacite) FROM salles");

while ($row = mysqli_fetch_assoc($request)) {
    echo '
        <tr>
            <td>' . htmlspecialchars($row['capacite']) . '</td>
        </tr>';
}

echo '
        </tbody>
    </table>
</body>
</html>';

mysqli_close($db);

?>