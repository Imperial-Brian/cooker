<!doctype html>
<?php
require("config.php");

$sql2 = "select * from user ";
$results2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($results2);

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Menu - Categories</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#menu" ).menu({
      items: "> :not(.ui-widget-header)"
    });
  });
  $(function() {
    $( "#menu1" ).menu({
      items: "> :not(.ui-widget-header)"
    });
  });
  $(function() {
    $( "#menu2" ).menu({
      items: "> :not(.ui-widget-header)"
    });
  });
  $(function() {
    $( "#menu3" ).menu({
      items: "> :not(.ui-widget-header)"
    });
  });

  </script>
  <style>
  .ui-menu { width: 200px; }
  .ui-widget-header { padding: 0.2em; }
  #m1{	
  position:absolute;
  left:230px;
  top:27px;
  
  }
  #m2{	
  position:absolute;
  left:450px;
  top:27px;
  
  }
  #m3{	
  position:absolute;
  left:670px;
  top:27px;
  
  }
  
  </style>
</head>
<body>
<table>

<div id="menu">
  <li class="ui-widget-header">Pizza</li>

  <li>Option 1<img src ="pics\pizza1.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 2<img src ="pics\pizza2.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 3<img src ="pics\pizza3.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 4<img src ="pics\pizza4.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  </div>
<div id="m1">
<div id="menu1">
  <li class="ui-widget-header">Bread</li>    
  <li>Option 1<img src ="pics\bread1.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  
  <li>Option 2<img src ="pics\bread2.jpg"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  <li>Option 3<img src ="pics\bread3.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  <li>Option 4<img src ="pics\bread4.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
</div>
</div>
<div id="m2">
<div id="menu2">
  <li class="ui-widget-header">Cake</li>

  <li>Option 1<img src ="pics\cake1.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 2<img src ="pics\cake2.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 3<img src ="pics\cake3.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
  <li>Option 4<img src ="pics\cake4.png"  width="50px">
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?></li>
</div>
</div>
<div id="m3">
<div id="menu3">
  <li class="ui-widget-header">Cookie</li>    
  <li>Option 1<img src ="pics\cookie1.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  <li>Option 2<img src ="pics\cookie2.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  <li>Option 3<img src ="pics\cookie3.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
  <li>Option 4<img src ="pics\cookie4.png"  width="50px">
  
  <?php
  echo" Sum：";
  echo $rs2['cash']; 
  ?>
</div>
</div>
</div>

</table>

</body>
</html>
