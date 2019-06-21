<?php
require("config.php");
$id=$_SESSION['uID'];
?>
<style type="text/css"></style>
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />

<script src="assets/countdown/jquery.countdown.js"></script>
<script src="assets/js/script.js"></script>
<script>/*
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
        top: ($(window).height() - $(".modal-box").outerHeight()) / 1000,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
});*/
</script>
</head>

<div id=content >
<?php
$id=(int)$_GET['id'];
$hour1=time();//使用者查看秒數
$sql4="select * from land where id=$id;";
$results4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($results4);
$ftime=$rs4['ftime'];//作物完成時間秒數
$time=$ftime-$hour1;//作物完成時間減去使用者查看時間秒數(作物剩餘時間)
$status=$rs4['status'];
if($time<=0){
    $h=0;//已完成
    $m=0;
    $s=0;        
}
else{
    $h=floor($time/3600);//幾小時
    $time=$time-($h*3600);
    $m=floor($time/60);//幾分
    $time=$time-($m*60);
    $s=$time%60;//幾秒
    }
?>
<div id=show>
<?php
    echo" $status 還剩下:" ;
    echo"</br>";
    echo" $h 小時 $m 分鐘 $s 秒可採收";
    echo"</br>";
?>
</div>
<?php
    if($h==0 and $m==0 and $s==0){
        ?>
        <script type="text/javascript">
            self.opener.location.reload(); //重新整理farm.php頁面
        </script>
        <?php
    }
header("refresh: 1;url=showtime.php?id=$id" ); 
?>
</div>