<?php
session_start();

include ('connection.php');

$sql = "SELECT * FROM user";
$res = $con->query($sql);

echo "<html><head><title>ADMIN</title></head><body marginheight=\"100\">";
echo "<table align='center' border='3' cellspacing='1' width='50%' bgcolor='#7fffd4' >";
echo "<tr align='center'>";
echo "<td>ID</td><td>USERNAME</td><td>PASSWORD</td><td>NAME</td><td>SURNAME</td><td>TYPE</td><td>EDIT</td>";
echo "</tr>";

while($row = $res->fetch(PDO::FETCH_OBJ))
{
    echo "<tr bgcolor='#ffb6c1' align='center'>";
    echo "<td>$row->id</td><td>$row->username</td><td>$row->password</td><td>$row->name</td><td>$row->surname</td><td>$row->type</td>";
    echo "<form name=\"manage\" action='edit.php' method='post'>";
    echo "<td><input type='submit' onclick=\"window.location.href='edit.php'\" name='edit' value='edit'/>
          <input type='hidden' name='id' value= $row->username /></td>";
    echo "</tr>";
    echo "</form>";
}

?>
</table>
<p align="center"><input type="button" onclick="window.location.href='insert.php'" value="insert new user"/></p>

</body>
</html>

