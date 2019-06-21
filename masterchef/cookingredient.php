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
    case'cake1'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cake1' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cakeoven.php");
        
        break;
    case'cake2'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cake2' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cakeoven.php");
        
        break;
    case'cake3'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cake3' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cakeoven.php");
        
        break;
    case'cake4'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cake4' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cakeoven.php");
        
        break;
    case'bread1'://bread
        $sql = "update breadoven set `amount`=`amount`-1 ,`status`= 1 where `name`='bread1' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:breadoven.php");
        
        break;
    case'bread2'://bread
        $sql = "update breadoven set `amount`=`amount`-1 ,`status`= 1 where `name`='bread2' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:breadoven.php");
        
        break;
    case'bread3'://bread
        $sql = "update breadoven set `amount`=`amount`-1 ,`status`= 1 where `name`='bread3' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:breadoven.php");
        
        break;
    case'bread4'://bread
        $sql = "update breadoven set `amount`=`amount`-1 ,`status`= 1 where `name`='bread4' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:breadoven.php");
        
        break;
    case'cookie1'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cookie1' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cookieoven.php");
        
        break;
    case'cookie2'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cookie2' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cookieoven.php");
        
        break;
    case'cookie3'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cookie3' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cookieoven.php");
        
        break;
    case'cookie4'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 ,`status`= 1 where `name`='cookie4' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:cookieoven.php");
        
        break;
    case'pizza1'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 ,`status`= 1 where `name`='pizza1' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:pizzaoven.php");
        
        break;
    case'pizza2'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 ,`status`= 1 where `name`='pizza2' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:pizzaoven.php");
        
        break;
    case'pizza3'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 ,`status`= 1 where `name`='pizza3' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:pizzaoven.php");
        
        break;
    case'pizza4'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 ,`status`= 1 where `name`='pizza4' and user='$uid';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        header("Location:pizzaoven.php");
        
        break;
}
?>

</body>
</html>
