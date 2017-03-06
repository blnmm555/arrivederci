<?php
session_start();
include ('connection.php');

if (isset($_POST["submit"]))
{
    $sql = "SELECT username,password,type FROM user WHERE username = '{$_POST['username']}' AND password = '{$_POST['password']}'";
    $res = $con->query($sql);
    if ($row = $res->fetch(PDO::FETCH_OBJ))
    {
        if ($row->type == "admin")
        {
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            header("Location:admin.php");
        }
        elseif($row->type == "user")
        {
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            header("Location:user.php");
        }

    }
    else
    {
        echo"<script>";
        echo"alert('Username or password incorrect');";
        echo "window.location.href='index.php';";
        echo"</script>";

    }
}
?>

