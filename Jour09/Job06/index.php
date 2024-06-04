<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT COUNT(id) AS total FROM étudiants");

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