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
$uid=$_SESSION['uID'];
$sql = "select * from user where id='$uid';";
$results=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($results);
if ($rs["gender"]==0)
    $gender='女士';
else
    $gender='先生';
echo $_SESSION["nickname"], $gender, "您好! 歡迎來到開心小廚神MasterChef!";
echo "<a href=\"logout.php\">登出</a>";
}
?>