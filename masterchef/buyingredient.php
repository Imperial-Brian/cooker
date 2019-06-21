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
$select2="select * from cakeoven where `user` = '$uid';";
$select3="select * from cookieoven where `user`='$uid';";
$select4="select * from breadoven where `user`='$uid';";
$select5="select * from pizzaoven where `user`='$uid';";
$which=0;
switch($ingredient)
{
    case'cake1'://cake
        if ($rs2['cash']>=50)
        {
            $sql = "update cakeoven set `amount`=`amount`+1 where `name`='cake1';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cake';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cake2'://cake
        if ($rs2['cash']>=60)
        {
            $sql = "update cakeoven set `amount`=`amount`+1 where `name`='cake2';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cake';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cake3'://cake
        if ($rs2['cash']>=70)
        {
            $sql = "update cakeoven set `amount`=`amount`+1 where `name`='cake3';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cake';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cake4'://cake
        if ($rs2['cash']>=80)
        {
            $sql = "update cakeoven set `amount`=`amount`+1 where `name`='cake4';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cake';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'bread1'://bread
        if ($rs2['cash']>=50)
        {
            $sql = "update breadoven set `amount`=`amount`+1 where `name`='bread1';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='bread';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'bread2'://bread
        if ($rs2['cash']>=60)
        {
            $sql = "update breadoven set `amount`=`amount`+1 where `name`='bread2';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='bread';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'bread3'://bread
        if ($rs2['cash']>=70)
        {
            $sql = "update breadoven set `amount`=`amount`+1 where `name`='bread3';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='bread';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'bread4'://bread
        if ($rs2['cash']>=80)
        {
            $sql = "update breadoven set `amount`=`amount`+1 where `name`='bread4';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='bread';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cookie1'://cookie
        if ($rs2['cash']>=50)
        {
            $sql = "update cookieoven set `amount`=`amount`+1 where `name`='cookie1';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cookie';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cookie2'://cookie
        if ($rs2['cash']>=60)
        {
            $sql = "update cookieoven set `amount`=`amount`+1 where `name`='cookie2';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cookie';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cookie3'://cookie
        if ($rs2['cash']>=70)
        {
            $sql = "update cookieoven set `amount`=`amount`+1 where `name`='cookie3';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cookie';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'cookie4'://cookie
        if ($rs2['cash']>=80)
        {
            $sql = "update cookieoven set `amount`=`amount`+1 where `name`='cookie4';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='cookie';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'pizza1'://pizza
        if ($rs2['cash']>=50)
        {
            $sql = "update pizzaoven set `amount`=`amount`+1 where `name`='pizza1';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='pizza';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'pizza2'://pizza
        if ($rs2['cash']>=60)
        {
            $sql = "update pizzaoven set `amount`=`amount`+1 where `name`='pizza2';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='pizza';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'pizza3'://pizza
        if ($rs2['cash']>=70)
        {
            $sql = "update pizzaoven set `amount`=`amount`+1 where `name`='pizza3';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='pizza';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
    case'pizza4'://pizza
        if ($rs2['cash']>=80)
        {
            $sql = "update pizzaoven set `amount`=`amount`+1 where `name`='pizza4';";
            mysqli_query($conn,$sql) or die("MySQL query error"); 
            $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
            mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
            $which='pizza';//成功購買
            echo "<h1>purchase successful</h1>";
        }
        else
            echo "<h1>not enough money!</h1>";
        break;
}

if($which=='cake'){
 ?>   
<div class="Back" style="z-index:15">
    <a href="cakematerial.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
<?php
}
if($which=='bread'){
 ?>   
<div class="Back" style="z-index:15">
    <a href="breadmaterial.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
<?php
}
if($which=='pizza'){
 ?>   
<div class="Back" style="z-index:15">
    <a href="pizzamaterial.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
<?php
}
if($which=='cookie'){
 ?>   
<div class="Back" style="z-index:15">
    <a href="cookiematerial.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
<?php    
}
?>
</body>
</html>
