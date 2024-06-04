<?php 

$db = mysqli_connect('localhost','root','', 'Jour09');
$request = mysqli_query($db,"SELECT * FROM salles ORDER BY capacite ASC;");

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