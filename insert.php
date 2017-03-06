<html>
<head>
    <title>INSERT</title>
</head>
<body marginheight="100">

<form name="login" action="insert.php" method="post">
    <p align="center"><font color="black"><b>Insert User</b></font</p><br/><br/>
    <p align="center"><font color="black">username : </font><input type="text" name="username" value="username" size="15" maxlength="30"/></p><br/>
    <p align="center"><font color="black">password : </font><input type="text" name="password" value="password" size="15" maxlength="30" /></p><br/>
    <p align="center"><font color="black">name : </font><input type="text" name="name" value="name" size="15" maxlength="30" /></p><br/>
    <p align="center"><font color="black">surname : </font><input type="text" name="surname" value="surname" size="15" maxlength="30" /></p><br/>
    <p align="center"><font color="black">type : </font><input type="text" name="type" value="type" size="15" maxlength="30" /></p><br/>
    <p align="center"><input type="submit" name="comfirm" value="Comfirm"  /></p>
</form>
</body>
</html>
<?php
include ('config.php');
$con = new PDO(DSN,DBUSER,DBPASS);
$sql = "INSERT INTO user(username,password,name,surname,type) VALUE ('{$_POST['username']}','{$_POST['password']}','{$_POST['name']}','{$_POST['surname']}','{$_POST['type']}')";

if(isset($_POST["comfirm"]))
{
    $con->exec($sql);
    echo"<script>";
    echo"alert('Insert user {$_POST['username']} success');";
    echo "window.location.href='admin.php';";
    echo"</script>";
}


