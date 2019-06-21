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
</style>
<head>

<script>
</script>

</head>
<html>
<body>
<div class="game">

</div>

<div class="Back" style="z-index:15">
<a href="shop.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>

<div class="chef">
<img src="pics\Chef-Clipart.png" width="250px">
</div>

<div class="bake" >

<table class="pizzacategory">
<tr><td><img src ="pics\pizza1.png"  width="150px"></td>
<td><img src ="pics\pizza2.png"  width="150px"></td>
<td><img src ="pics\pizza3.png"  width="150px"></td></tr>
<tr><td>$50<br/><a class="js-open-modal btn" href="#" data-modal-id="buy1"><img src ="pics\buybutton.png"  width="100px"></a></td>
<td>$60<br/><a class="js-open-modal btn" href="#" data-modal-id="buy2"><img src ="pics\buybutton.png"  width="100px"></a></td>
<td>$70<br/><a class="js-open-modal btn" href="#" data-modal-id="buy3"><img src ="pics\buybutton.png"  width="100px"></a></td></tr>
<tr><td><img src ="pics\pizza4.png" style="z-index:10" width="150px"></td>
<tr><td>$80<br/><a class="js-open-modal btn" href="#" data-modal-id="buy4"><img src ="pics\buybutton.png"  width="100px"></a></td>
</tr>
</table>

</div>
<div id="buy1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Pizza Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $50?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizza1">buy</button></form> </footer>
</div>
<div id="buy2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Pizza Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $60?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizza2">buy</button></form> </footer>
</div>
<div id="buy3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Pizza Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $70?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizza3">buy</button></form> </footer>
</div>
<div id="buy4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy This Pizza Ingredient?</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy this ingredient packet for $80?</p>
        </div>
        <footer><form method="post" action="buyingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizza4">buy</button></form> </footer>
</div>
</body>
</html>
