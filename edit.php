<html>
<head>
    <title>EDIT</title>
</head>
<body marginheight="100">

<form name="login" action="edit.php" method="post">
    <p align="center"><font color="black"><b>Edit User</b></font</p><br/><br/>
    <p align="center"><input type="submit" name="delete" value="Delete"  /></p>
</form>
</body>
</html>
<?php
include ('connection.php');

$sql1 = "SELECT * FROM user WHERE username = '{$_POST['id']}'";
$sql2 = "DELETE FROM user WHERE username = '{$_POST['id']}'";
$res = $con->query($sql1);
if ($row = $res->fetch(PDO::FETCH_OBJ))
{
    echo "<html><head><title>USER</title></head><body marginheight=\"100\">";
    echo "<table align='center' border='3' cellspacing='1' width='50%' bgcolor='#7fffd4' >";
    echo "<tr align='center'>";
    echo "<td>ID</td><td>USERNAME</td><td>PASSWORD</td><td>NAME</td><td>SURNAME</td><td>TYPE</td>";
    echo "</tr>";
    echo "<tr bgcolor='#ffb6c1' align='center'>";
    echo "<td>$row->id</td><td>$row->username</td><td>$row->password</td><td>$row->name</td><td>$row->surname</td><td>$row->type</td>";
    echo "</tr>";
}
if(isset($_POST['edit']))
{
    echo $_POST['id'];
}

if(isset($_POST['delete']))
{
    $con->exec($sql2);
    echo"<script>";
    echo"alert('Delete user {$_POST["id"]} success');";
    echo "window.location.href='admin.php';";
    echo"</script>";
}
?>

