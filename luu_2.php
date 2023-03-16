<?php

//$tendangnhap = $_SESSION['login_user'];
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//rang buoc mat khau

	$old_pass = md5($_POST['pass']);
	$pass1 = md5($_POST['pass1']);
	$pass2 = md5($_POST['pass2']);
	
//kiem tra mat khau cu
	$sql = "select password from customers where email = '".$_COOKIE["user"]."'";	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	/*	if ( $row["password"] === $old_pass AND $row["password"] != $pass1  AND $pass1 === $pass2)
			{
			//luu mat khau
			$user = $_COOKIE["user"];
			$sql = "UPDATE customers set password = '".md5($_POST["pass1"])."'";
			$sql = $sql. " WHERE email='$user'";				
		} */
		
		if($row["password"] != $old_pass){
			echo "Doi mat khau khong thanh cong. Mat khau cu nhap sai! ";
			}
		else if($row["password"] === $pass1){
				echo "Doi mat khau khong thanh cong. Mat khau cu va moi bi trung! ";
				}
			 else if($pass1 != $pass2) {
					echo "Doi mat khau khong thanh cong. Mat khau nhap lai khong khop! ";
					}
				  else {
					$user = $_COOKIE["user"];
					$sql = "UPDATE customers set password = '".md5($_POST["pass1"])."'";
					$sql = $sql. " WHERE email='$user'";
						if ($conn->query($sql) == TRUE) {
								echo "Doi mk thanh cong!";} 
							else {
								echo "Error: " . $sql . "<br>" . $conn->error;}	
						}
				}

$conn->close();
?>

