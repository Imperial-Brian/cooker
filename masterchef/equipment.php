<?php
require("config.php");
$id=$_SESSION['uID'];
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
.chef{
	width: 150px;
	height: 100px;
    position: absolute;
	left: 600px;
	top: 340px;
	z-index: 20;
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
table {
    width: 700px;
	height: 520px;
	text-align: center;
	background-color: white;
	z-intex: 8px;
}
tr td{
	font-size: 30px;
	color: #191a00;
	font-family: cursive;
	font-weight: bolder;
}
ul li{
    list-style-type: none;
	width: 20px;
}

</style>
<head>

<script>

var bs=new Audio();
bs.src="Music05.mp3";

</script>

</head>
<html>
<body>
<div class="game">

</div>

<div class="Back" style="z-index:15">
<a href="shop.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>



<div class="bake">

<table class="equipment">
<?php
$uid=$_SESSION['uID'];
$sql = "select * from breadoven where amount>0 and user='$uid';";
$results=mysqli_query($conn,$sql); 
echo "<tr>";
while ($rs=mysqli_fetch_array($results)) {
	$src = $rs['name'];
	echo "<td><img src =\"pics\\{$src}.png\" width=\"110px\"></td>"; 
	echo "<td>x " , $rs['amount'] ,"</td>" ;
	
}
echo "</tr>";
echo "<tr>";
$sql2 = "select * from pizzaoven where amount>0 and user='$uid';";
$results2=mysqli_query($conn,$sql2); 
while ($rs2=mysqli_fetch_array($results2)) {
	$src2 = $rs2['name'];
	echo "<td><img src =\"pics\\{$src2}.png\" width=\"110px\"></td>"; 
	echo "<td>x " , $rs2['amount'] ,"</td>" ;
}
echo "</tr>";
echo "<tr>";
$sql3 = "select * from cakeoven where amount>0 and user='$uid';";
$results3=mysqli_query($conn,$sql3); 
while ($rs3=mysqli_fetch_array($results3)) {
	$src3 = $rs3['name'];
	echo "<td><img src =\"pics\\{$src3}.png\" width=\"110px\"></td>"; 
	echo "<td>x " , $rs3['amount'] ,"</td>" ;
}
echo "</tr>";
echo "<tr>";
$sql4 = "select * from cookieoven where amount>0 and user='$uid';";
$results4=mysqli_query($conn,$sql4); 
while ($rs4=mysqli_fetch_array($results4)) {
	$src4 = $rs4['name'];
	echo "<td><img src =\"pics\\{$src4}.png\" width=\"110px\"></td>"; 
	echo "<td>x " , $rs4['amount'] ,"</td>" ;
}
echo "</tr>";
?>
</table>
</div>

<body onload="alertify.alert('歡迎來到麵包坊   來烤個麵包吧')"  ">
<audio src="Music05.mp3" autoplay="true" loop="true" 
hidden="true"></audio>

</body>
</html>
