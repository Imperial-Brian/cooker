<?php
require("config.php");

$ingredient = $_POST['id'];
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
$uid=$_SESSION['uID'];
$select="select * from user where id='$uid';";
$results=mysqli_query($conn,$select);
$rs2=mysqli_fetch_array($results);
switch($ingredient)
{
    case'cake1'://cake1
        $sql = "update user set `cash`=`cash`+100,`exp`=`exp`+40 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error1-1"); 
        $sql2 = "update cakeoven set `status`= 0 where `name`='cake1';";
        mysqli_query($conn,$sql2) or die("MySQL query error1-2"); 
        header("Location:cakeoven.php");
        break;
    case'cake2'://cake2
        $sql = "update user set `cash`=`cash`+120,`exp`=`exp`+50 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error2-1"); 
        $sql2 = "update cakeoven set `status`= 0 where `name`='cake2';";
        mysqli_query($conn,$sql2) or die("MySQL query error2-2"); 
        header("Location:cakeoven.php");
        break;
    case'cake3'://cake3
        $sql = "update user set `cash`=`cash`+140,`exp`=`exp`+60 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error3-1"); 
        $sql2 = "update cakeoven set `status`= 0 where `name`='cake3';";
        mysqli_query($conn,$sql2) or die("MySQL query error3-2"); 
        header("Location:cakeoven.php");
        break;
    case'cake4'://cake4
        $sql = "update user set `cash`=`cash`+160,`exp`=`exp`+70 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error4-1"); 
        $sql2 = "update cakeoven set `status`= 0 where `name`='cake4';";
        mysqli_query($conn,$sql2) or die("MySQL query error4-2"); 
        header("Location:cakeoven.php");
        
        break;
    case'bread1'://bread1
        $sql = "update user set `cash`=`cash`+100,`exp`=`exp`+30 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error5-1"); 
        $sql2 = "update breadoven set `status`= 0 where `name`='bread1';";
        mysqli_query($conn,$sql2) or die("MySQL query error5-2"); 
        header("Location:breadoven.php");
        break;
    case'bread2'://bread2
        $sql = "update user set `cash`=`cash`+120,`exp`=`exp`+40 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error6-1"); 
        $sql2 = "update breadoven set `status`= 0 where `name`='bread2';";
        mysqli_query($conn,$sql2) or die("MySQL query error6-2"); 
        header("Location:breadoven.php");
        break;
    case'bread3'://bread3
        $sql = "update user set `cash`=`cash`+140,`exp`=`exp`+50 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error7-1");
        $sql2 = "update breadoven set `status`= 0 where `name`='bread3';";
        mysqli_query($conn,$sql2) or die("MySQL query error7-2"); 
        header("Location:breadoven.php");
        break;
    case'bread4'://bread4
        $sql = "update user set `cash`=`cash`+160,`exp`=`exp`+60 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error8-1"); 
        $sql2 = "update breadoven set `status`= 0 where `name`='bread4';";
        mysqli_query($conn,$sql2) or die("MySQL query error8-2"); 
        header("Location:breadoven.php");
        break;
    case'cookie1'://cookie1
        $sql = "update user set `cash`=`cash`+100,`exp`=`exp`+20 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error9-1"); 
        $sql2 = "update cookieoven set `status`= 0 where `name`='cookie1';";
        mysqli_query($conn,$sql2) or die("MySQL query error9-2"); 
        header("Location:cookieoven.php");
        break;
    case'cookie2'://cookie2
        $sql = "update user set `cash`=`cash`+120,`exp`=`exp`+30 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error10-1");
        $sql2 = "update cookieoven set `status`= 0 where `name`='cookie2';";
        mysqli_query($conn,$sql2) or die("MySQL query error10-2");         
        header("Location:cookieoven.php");
        break;
    case'cookie3'://cookie3
        $sql = "update user set `cash`=`cash`+140,`exp`=`exp`+40 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error11-1");
        $sql2 = "update cookieoven set `status`= 0 where `name`='cookie3';";
        mysqli_query($conn,$sql2) or die("MySQL query error11-2");         
        header("Location:cookieoven.php");
        
        break;
    case'cookie4'://cookie4
        $sql = "update user set `cash`=`cash`+160,`exp`=`exp`+50 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error12-1"); 
        $sql2 = "update cookieoven set `status`= 0 where `name`='cookie4';";
        mysqli_query($conn,$sql2) or die("MySQL query error12-2"); 
        header("Location:cookieoven.php");
        break;
    case'pizza1'://pizza1
        $sql = "update user set `cash`=`cash`+100,`exp`=`exp`+50 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error13-1");
        $sql2 = "update pizzaoven set `status`= '0' where `name`='pizza1';";
        mysqli_query($conn,$sql2) or die("MySQL query error13-2");         
        header("Location:pizzaoven.php");
        break;
    case'pizza2'://pizza2
        $sql = "update user set `cash`=`cash`+120,`exp`=`exp`+60 where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error14-1");
        $sql2 = "update pizzaoven set `status`= 0 where `name`='pizza2';";
        mysqli_query($conn,$sql2) or die("MySQL query error14-2");         
        header("Location:pizzaoven.php");
        break;
    case'pizza3'://pizza3
        $sql = "update user set `cash`=`cash`+140,`exp`=`exp`+70  where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error15-1");
        $sql2 = "update pizzaoven set `status`= 0 where `name`='pizza3';";
        mysqli_query($conn,$sql2) or die("MySQL query error15-2");         
        header("Location:pizzaoven.php");
        break;
    case'pizza4'://pizza4
        $sql = "update user set `cash`=`cash`+160,`exp`=`exp`+80  where id='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error16-1"); 
        $sql2 = "update pizzaoven set `status`= 0 where `name`='pizza4';";
        mysqli_query($conn,$sql2) or die("MySQL query error16-2"); 
        header("Location:pizzaoven.php");
        break;
}
?>
</body>
</html>
