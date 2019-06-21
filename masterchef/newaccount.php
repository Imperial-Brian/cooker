<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳號申請</title>
</head>

<script>

var bs=new Audio();
bs.src="Music03.mp3";

</script>

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
	$sql = "insert into user (id, password, nickname, gender, cash,exp) values ('$uid', '$password','$nickname','$gender', '550','0');";
    $sql2 = "insert into oven (uid, cakeoven, breadoven, pizzaoven, cookieoven) values ('$uid','0','0','0','0');";
     $sql3 = "insert into cakeoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cake1','0','40','1','50', '100','0');";
     $sql4 = "insert into cakeoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cake2','0','50','2','60', '120','0');";
     $sql5 = "insert into cakeoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cake3','0','60','3','70', '140','0');";
     $sql6 = "insert into cakeoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cake4','0','70','4','80', '160','0');";
     $sql7 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread1','0','30','1','50', '100','0');";
     $sql8 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread2','0','40','2','60', '120','0');";
     $sql9 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread3','0','50','3','70', '140','0');";
     $sql10 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread4','0','60','4','80', '160','0');";
     $sql7 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread1','0','30','1','50', '100','0');";
     $sql8 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread2','0','40','2','60', '120','0');";
     $sql9 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread3','0','50','3','70', '140','0');";
     $sql10 = "insert into breadoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'bread4','0','60','4','80', '160','0');";
     $sql11 = "insert into cookieoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cookie1','0','20','1','50', '100','0');";
     $sql12 = "insert into cookieoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cookie2','0','30','2','60', '120','0');";
     $sql13 = "insert into cookieoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cookie3','0','40','3','70', '140','0');";
     $sql14 = "insert into cookieoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'cookie4','0','50','4','80', '160','0');";
     $sql15 = "insert into pizzaoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'pizza1','0','50','1','50', '100','0');";
     $sql16 = "insert into pizzaoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'pizza2','0','60','2','60', '120','0');";
     $sql17 = "insert into pizzaoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'pizza3','0','70','3','70', '140','0');";
     $sql18 = "insert into pizzaoven (user, name, amount, exp, time, cash, sold,status) values ('$uid', 'pizza4','0','80','4','80', '160','0');";
      mysqli_query($conn,$sql2) or die("MySQL insert message error"); //執行SQL
      mysqli_query($conn,$sql3) or die("MySQL insert message error"); //執行SQL
      mysqli_query($conn,$sql4) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql5) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql6) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql7) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql8) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql9) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql10) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql11) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql12) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql13) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql14) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql15) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql16) or die("MySQL insert message error"); //執行SQL
      mysqli_query($conn,$sql17) or die("MySQL insert message error"); //執行SQL
     mysqli_query($conn,$sql18) or die("MySQL insert message error"); //執行SQL
	echo "New account added.";
    header("Location:login.php");
} else {
	echo "empty title, cannot insert.";
}
?>
</p>
<p><a href="register.php">回注冊頁面</a> </p>

<body onload="alertify.alert('歡迎來到麵包坊   來烤個麵包吧')"  ">
<audio src="Music03.mp3" autoplay="true" loop="true" 
hidden="true"></audio>

</body>
</html>
