<!doctype html>

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
.chef{
	width: 150px;
	height: 100px;
    position: absolute;
	left: 380px;
	top: 110px;
}
.Back{
    width: 150px;
	height: 100px;
    position: absolute;
	left: 700px;
	top: 500px;
}

</style>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Droppable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
</head>
<body>
<div class="game">

</div>

<div class="Back">
<a href="home.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>

<div class="chef">
<img src="pics\Chef-Clipart.png" width="400px">
</div>

<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <img src ="pics\1195430084499714436TheresaKnott_microwave_oven.svg.hi.png" style="z-index:10" width="350px">
</div>
 
</body>
</html>
