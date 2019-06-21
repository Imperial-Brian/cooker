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
$select="select * from user;";
$results=mysqli_query($conn,$select);
$rs2=mysqli_fetch_array($results);
$select2="select * from cakeoven where `uid`='$uid';";
$select3="select * from cookieoven where `uid`='$uid';";
$select4="select * from breadoven where `uid`='$uid';";
$select5="select * from pizzaoven where `uid`='$uid';";
//cake
if ($ingredient=='cake1') {
    if ($rs2['cash']>=50){
	$sql = "update cakeoven set `cake1`=`cake1`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cake2') {
    if ($rs2['cash']>=60){
	$sql = "update cakeoven set `cake2`=`cake2`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cake3') {
    if ($rs2['cash']>=70){
	$sql = "update cakeoven set `cake3`=`cake3`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cake4') {
    if ($rs2['cash']>=80){
	$sql = "update cakeoven set `cake4`=`cake4`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
//bread
if ($ingredient=='bread1') {
    if ($rs2['cash']>=50){
	$sql = "update breadoven set `bread1`=`bread1`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='bread2') {
    if ($rs2['cash']>=60){
	$sql = "update breadoven set `bread2`=`bread2`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='bread3') {
    if ($rs2['cash']>=70){
	$sql = "update breadoven set `bread3`=`bread3`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='bread4') {
    if ($rs2['cash']>=80){
	$sql = "update breadoven set `bread4`=`bread4`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
//cookie
if ($ingredient=='cookie1') {
    if ($rs2['cash']>=50){
	$sql = "update cookieoven set `cookie1`=`cookie1`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cookie2') {
    if ($rs2['cash']>=60){
	$sql = "update cookieoven set `cookie2`=`cookie2`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cookie3') {
    if ($rs2['cash']>=70){
	$sql = "update cookieoven set `cookie3`=`cookie3`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='cookie4') {
    if ($rs2['cash']>=80){
	$sql = "update cookieoven set `cookie4`=`cookie4`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
//pizza
if ($ingredient=='pizza1') {
    if ($rs2['cash']>=50){
	$sql = "update pizzaoven set `pizza1`=`pizza1`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='pizza2') {
    if ($rs2['cash']>=60){
	$sql = "update pizzaoven set `pizza2`=`pizza2`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-60 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='pizza3') {
    if ($rs2['cash']>=70){
	$sql = "update pizzaoven set `pizza3`=`pizza3`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-70 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
if ($ingredient=='pizza4') {
    if ($rs2['cash']>=80){
	$sql = "update pizzaoven set `pizza4`=`pizza4`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-80 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
    echo "<h1>purchase successful</h1>";
    }
    else{
        echo "<h1>not enough money!</h1>";
    }
} else echo "empty message id.";
?>
</div>
<div class="Back" style="z-index:15">
<a href="cakematerial.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
</body>
</html>
