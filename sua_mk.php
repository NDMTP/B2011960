<!DOCTYPE HTML>
<html>  
<body>
<?php
if(session_id() == '') session_start();
if (isset($_SESSION['fullname'])==false) {
    header("location:login.php");
    exit();
} 
?>

<form action="luu_2.php" method="post" id="frm" onsubmit="return frmValidate3(this);">
Nhập lại mật khẩu cũ: <input type="password" name="pass"><br>
<lable for='psw1'>Nhập mật khẩu mới: </label><input type="password" name="pass1" id='psw1'><br>
<lable for='psw2'>Nhập lại mật khẩu mới: </label><input type="password" name="pass2" id='psw2'><br>
<input type="submit">
</form>
</body>
</html>
