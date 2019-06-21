<?php
require("config.php");
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
}
.game h1{
    padding-left: 30px;
    padding-top: 30px;
}
.game p{
    padding-left: 30px;
}
.game form{
    padding-left: 30px;
}
#shop{
    position: absolute;
    left: 700px;
    top: 470px;
}
.coinexp{
	font-family: cursive;
	font-size: 25px;
	position: absolute;
	left: 200px;
	top: 440px;
    z-index:10;
	text-shadow: 0px 0px 7px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff,
}
<!--.btn {
  font-size: 3vmin;
  padding: 0.75em 1.5em;
  background-color: #fff;
  border: 1px solid #bbb;
  color: #333;
  text-decoration: none;
  display: inline;
  border-radius: 4px;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}-->

.btn:hover {
  background-color: #ddd;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn-small {
  padding: .75em 1em;
  font-size: 0.8em;
}
.modal-box {
  display: none;
  position: absolute;
  
  z-index: 1000;
  width: 300px;
  background: white;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 300px; position: absolute; left: 100px;}
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
</style>
<head>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>

var bs=new Audio();
bs.src="Background music.mp3";

$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
</head>
<html>
<body>
<div class="coinexp">
<?php
$uid = $_SESSION['uID'];
$sql2 = "select * from user where id = '$uid';";
$results2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($results2);
echo "<img src=\"pics\cash.png\" style=\"width:70px\" />：";
echo $rs2['cash'];
echo "<img src=\"pics\EXP.png\" style=\"width:90px\" />：";
echo ($rs2['exp']%100),"/100";
echo "<img src=\"pics\level.png\" style=\"width:90px\" />：";
echo floor($rs2['exp']/100);
?>
</div>
<div class="game">

<a href="shop.php"><img src="pics/shop.png" id="shop" width="60px" height="auto" ></a>
<!--if oven =0 -> locked, =1 -> unlocked -->
<?php
    $uid=$_SESSION['uID'];
    $sql = "select * from oven where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error");
    $results=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($results);
    
    if ($rs['pizzaoven']==0){
        echo "<a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buypizzaoven\"><img src=\"pics/pizzaovenlocked.png\" id=\"pizzaoven\" width=\"300px\"></a>";
    }
    else
        echo "<a href=\"pizzaoven.php\"><img src=\"pics/pizzaovenunlocked.png\" id=\"pizzaoven\" width=\"300px\">";
    if ($rs['breadoven']==0)
        echo "<a class=\"js-open-modal\" href=\"#\" data-modal-id=\"buybreadoven\"><img src=\"pics/breadovenlocked.png\" id=\"breadoven\" width=\"300px\"></a>";
    else
        echo "<a href=\"breadoven.php\"><img src=\"pics/breadovenunlocked.png\" id=\"breadoven\" width=\"300px\"></a>";
    if ($rs['cakeoven']==0)
        echo "<a class=\"js-open-modal\" href=\"#\" data-modal-id=\"buycakeoven\"><img src=\"pics/cakeovenlocked.png\" id=\"cakeoven\" width=\"300px\"></a>";
    else
        echo "<a href=\"cakeoven.php\"><img src=\"pics/cakeovenunlocked.png\" id=\"cakeoven\" width=\"300px\"></a>";
    if ($rs['cookieoven']==0)
        echo "<a class=\"js-open-modal\" href=\"#\" data-modal-id=\"buycookieoven\"><img src=\"pics/cookieovenlocked.png\" id=\"cookieoven\" width=\"300px\"></a>";
    else
        echo "<a href=\"cookieoven.php\"><img src=\"pics/cookieovenunlocked.png\" id=\"cookieoven\" width=\"300px\"></a>";
	
?>
<div id="buypizzaoven" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy Pizza Oven</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy the pizza oven for $500?</p>
        </div>
        <footer><form method="post" action="buyoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizzaoven">buy</button></form> </footer>
</div>
<div id="buybreadoven" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy Bread Oven</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy the bread oven for $500?</p>
        </div>
        <footer><form method="post" action="buyoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="breadoven">buy</button></form> </footer>
</div>
<div id="buycakeoven" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy Cake Oven</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy the Cake oven for $500?</p>
        </div>
        <footer><form method="post" action="buyoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cakeoven">buy</button></form> </footer>
</div>
<div id="buycookieoven" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy Cookie Oven</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy the cookie oven for $500?</p>
        </div>
        <footer><form method="post" action="buyoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cookieoven">buy</button></form> </footer>
</div>
<body onload="alertify.alert('歡迎來到麵包坊   來烤個麵包吧')"  ">
<audio src="Background music.mp3" autoplay="true" loop="true" 
hidden="true"></audio>
</body>
</html>
