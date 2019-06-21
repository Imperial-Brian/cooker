<?php9
require("config.php");
?>
<style type="text/css">
<!--.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
}-->
.game img{
    position: absolute;
    left:0px;
    top:0px;
}
</style>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="css/style.css">
		<style>
		#draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; position: absolute; left: 20px; top: 500px;}
		#droppable { width: 500px; height: 350px; padding: 0.5em; float: left; margin: 20px; position: absolute; left: 20px; top: 120px;}
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
<html>
<body>
    <div class="container">
		<div>
            <h3>Pizza oven</h3>
            <div id="droppable" class="ui-widget-header">
				<img src ="pics\ovenhome.png" style="z-index:1" width="800px" id="bread">
			</div>
			<div id="draggable" class="ui-widget-content">
				<p>Drag me to my target</p>
			</div>
		</div>
			
	</div>
</body>
</html>
