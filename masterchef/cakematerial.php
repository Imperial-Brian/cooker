<?php
require("config.php");
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
	font-size: 40px;
}
ul li{
    list-style-type: none;
	width: 20px;
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
bs.src="Music06.mp3";

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
<div class="Back" style="z-index:15">
<a href="shop.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
<div class="game">
</div>
<div class="chef">
<img src="pics\Chef-Clipart.png" width="250px">
</div>

<div class="bake" >

<table class="cakecategory">
<?php
    $uid = $_SESSION['uID'];
    $sql2 = "select * from user where id = '$uid';";
    mysqli_query($conn,$sql2) or die("MySQL query error");
    $results=mysqli_query($conn,$sql2);
    $rs=mysqli_fetch_array($results);
	if($rs['exp']>=0){
		echo "<tr><td><img src=\"pics\cake1.png\" width=\"150px\"></td>";
	}
	if($rs['exp']>=200){
		echo "<td><img src =\"pics\cake2.png\" width=\"150px\"></td>";
	}
	if($rs['exp']>=400){
		echo "<td><img src =\"pics\cake3.png\" width=\"150px\"></td></tr>";
	}
	if($rs['exp']>=0){
		echo "<tr><td>$50<br/><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy1\"><img src =\"pics\buybutton.png\"  width=\"100px\"></a></td>";
	}
    if($rs['exp']>=200){	
		echo "<td>$60<br/><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy2\"><img src =\"pics\buybutton.png\"  width=\"100px\"></a></td>";
    }
	if($rs['exp']>=400){
        echo "<td>$70<br/><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy3\"><img src =\"pics\buybutton.png\"  width=\"100px\"></a></td></tr>";
    }    
	if($rs['exp']>=600){	
	    echo "<tr><td><img src =\"pics\cake4.png\" style=\"z-index:10\" width=\"150px\"></td>";
    }
    if($rs['exp']>=600){
    echo "<tr><td>$80<br/><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy4\"><img src =\"pics\buybutton.png\"  width=\"100px\"></a></td>";
    }
	echo "</tr>";


?>
</table>

</div>
<div id="buy1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $50?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">buy</button></form> </footer>
</div>
<div   id="buy2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Cake Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $60?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake2">buy</button></form> </footer>
</div>
<div id="buy3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Cake Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $70?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake3">buy</button></form> </footer>
</div>
<div id="buy4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Cake Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $80?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake4">buy</button></form> </footer>
</div>

<body onload="alertify.alert('歡迎來到麵包坊   來烤個麵包吧')"  ">
<audio src="Music05.mp3" autoplay="true" loop="true" 
hidden="true"></audio>

</body>
</html>
