<?php

$myDB = new mysqli('localhost', 'root', 'training', 'library');
//
if ($myDB->connect_error)
{
    die('Connect error (' . $myDB->connect_errno . ') '
                            . $myDB->connect_error);
}

$sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";

$result = $myDB->query($sql);

?>

<table cellSpacing="2" cellPadding="6" align="center" border="1">

    <tr>
        <td colspan="4">
            <h3 align="center">these books are currently available</h3>
        </td>
    </tr>

    <tr>
        <td align="center">title</td>
        <td align="center">year published</td>
        <td align="center">isbn</td>
    </tr>

<?php
While ($row = $result->fetch_assoc() ) {
    echo "<tr>";
    echo "<td>";
    echo stripslashes($row["title"])
    echo "</td><td>";
    echo $row["ISBN"];
    echo "</td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>