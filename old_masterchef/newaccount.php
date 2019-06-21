<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳號申請</title>
</head>

<body>

<p>帳號申請</p>
<hr />
<p>
<?php
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8");
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);


if ($uid) {
	$sql = "insert into user (id, password, nickname, gender, cash) values ('$uid', '$password','$nickname','$gender', '500');";
    $sql2 = "insert into oven (uid, cakeoven, breadoven, pizzaoven, cookieoven) values ('$uid', '0','0','0', '0');";
    $sql3 = "insert into cakeoven (uid, cake1, cake2, cake3, cake4) values ('$uid', '0','0','0', '0');";
    $sql4 = "insert into breadoven (uid, bread1, bread2, bread3, bread4) values ('$uid', '0','0','0', '0');";
    $sql5 = "insert into cookieoven (uid, cookie1, cookie2, cookie3, cookie4) values ('$uid', '0','0','0', '0');";
    $sql6 = "insert into pizzaoven (uid, pizza1, pizza2, pizza3, pizza4) values ('$uid', '0','0','0', '0');";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
    mysqli_query($conn,$sql2) or die("MySQL insert message error"); //執行SQL
    mysqli_query($conn,$sql3) or die("MySQL insert message error"); //執行SQL
    mysqli_query($conn,$sql4) or die("MySQL insert message error"); //執行SQL
	echo "New account added.";
    header("Location:login.php");
} else {
	echo "empty title, cannot insert.";
}
?>
</p>
<p><a href="register.php">回注冊頁面</a> </p>
</body>
</html>
