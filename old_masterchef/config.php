<?php
session_start();
if( !isset($_SESSION["uID"]))
	header("Location:login.php");
if ($_SESSION["uID"]=="")
	header("Location:login.php");
else{
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
echo $_SESSION["nickname"], "您好! 歡迎來到開心小廚神MasterChef!";
echo "<a href=\"logout.php\">登出</a>";
}
?>