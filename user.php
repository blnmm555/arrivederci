<?php
session_start();

include ('connection.php');

$sql = "SELECT id,username,password,name,surname FROM user WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}'";
$res = $con->query($sql);

if ($row = $res->fetch(PDO::FETCH_OBJ))
{
    echo "<html><head><title>USER</title></head><body marginheight=\"100\">";
    echo "<table align='center' border='3' cellspacing='1' width='50%' bgcolor='#7fffd4' >";
    echo "<tr align='center'>";
    echo "<td>ID</td><td>USERNAME</td><td>PASSWORD</td><td>NAME</td><td>SURNAME</td>";
    echo "</tr>";
    echo "<tr bgcolor='#ffb6c1' align='center'>";
    echo "<td>$row->id</td><td>$row->username</td><td>$row->password</td><td>$row->name</td><td>$row->surname</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>