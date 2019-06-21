<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 50px;
    padding-top: 60px;
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
.game img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
}
.form 
{
    position:absolute;
    left:260px;
    top:147px;
    width:280px;
    height:320px;
    background:#F7F2E0;
}
.title
{
    position:absolute;
    left:200px;
}
</style>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title >申請帳號</title>
</head>
<body>
<div class="game">

<table class="form" width="200" border="1">
<form method="post" action="newaccount.php">
  <th colspan="2">申請帳號</th>
  <tr>
    <td>帳號</td>
    <td><input name="uid" type="text" id="uid"></td>
  </tr>
  <tr>
    <td>密碼</td>
    <td><input name="password" type="password" id="password" /></td>
  </tr>
  <tr>
    <td>暱稱</td>
    <td><input name="nickname" type="text" id="nickname" /></td>
  </tr>
  <tr>
    <td>性別</td>
    <td>
    <input type="radio" id="gender" name="gender" value="1" />男<input type="radio" id="gender" name="gender" value="0"/>女</td>  
  </tr>
  <tr>
    <td colspan="2" text align="center">
    	<input type="submit" name="Submit" value="送出" />
    	<input type="reset" value="清除" />
    	<input type ="button" onclick="javascript:location.href='login.php'" value="返回">
    </td>
  </tr>
	</form>
</table>
</body>
</div>
</html>
