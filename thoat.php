<?php
//xoa session
session_start();
session_destroy();
echo "Đã xóa toàn bộ session <br>";

//XOA COOKIE
setcookie( "user", "", time()- 60, "/","", 0);
setcookie( "fullname", "", time()- 60, "/","", 0);
setcookie( "id", "", time()- 60, "/","", 0);
echo "Đã xóa toàn bộ cookie";
?>