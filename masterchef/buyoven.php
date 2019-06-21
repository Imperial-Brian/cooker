<?php
require("config.php");
$oven = $_POST['id'];
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8");
$uid=$_SESSION['uID'];
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/materialbackground.jpg); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
	z-index:1;
	opacity: .5;
	filter: Alpha(Opacity=50);
}
.game h1{
    padding-left: 30px;
    padding-top: 30px;
    color: black;
}

.Back{
    width: 150px;
	height: 100px;
    position: absolute;
	left: 750px;
	top: 600px;
}
.bake {
	position: absolute;
	left: 80px;
	top: 90px;
    z-index: 10;
    
    opacity:0.9;
}
</style>
<head>
</head>
<html>
<body>
<div class="game">
<?php
$nickname=$_SESSION['nickname'];//使用者

$select="select * from user where nickname='$nickname';";
$results=mysqli_query($conn,$select);
$rs2=mysqli_fetch_array($results);
$id=$_POST['id'];

if($id=='breadoven')
    $id=1;
if($id=='cakeoven')
    $id=2;
if($id=='cookieoven')
    $id=3;
if($id=='pizzaoven')
    $id=4;

if ($rs2['cash']>=500){
    if ($oven==pizzaoven) {
        $sql = "update oven set `pizzaoven`='1' where uid='$uid';";
        $sql2 = "update user set `cash`=`cash`-500 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
        mysqli_query($conn,$sql2) or die("MySQL query error2");
        header("Location:home.php");
    } else echo "empty message id.";
    if ($oven==breadoven) {
        $sql = "update oven set `breadoven`='1' where uid='$uid';";
        $sql2 = "update user set `cash`=`cash`-500 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
        mysqli_query($conn,$sql2) or die("MySQL query error2");
        header("Location:home.php");
    } else echo "empty message id.";
    if ($oven==cookieoven) {
        $sql = "update oven set `cookieoven`='1' where uid='$uid';";
        $sql2 = "update user set `cash`=`cash`-500 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
        mysqli_query($conn,$sql2) or die("MySQL query error2");
        header("Location:home.php");
    } else echo "empty message id.";
    if ($oven==cakeoven) {
        $sql = "update oven set `cakeoven`='1' where uid='$uid';";
        $sql2 = "update user set `cash`=`cash`-500 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
        mysqli_query($conn,$sql2) or die("MySQL query error2");
        header("Location:home.php");
    } else echo "empty message id.";

header("Location:home.php");
}
echo "<h1>you don't have enough money!</h1>"
?>
</div>
<div class="Back" style="z-index:15">
<a href="home.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
</body>
</html>