<?php
session_start();
include_once('dbconnect.php');

$email = $_SESSION['uid'];

$sql = "delete from user where email = '$email'";

if($conn->query($sql)) 
{
	session_destroy();
	
	echo "<script>
		  alert('회원정보를 삭제하였습니다.');
		  location.href = 'index.php';
		  </script>";
}
else echo "회원정보 삭제 중에 오류가 발생했습니다.".$conn->error;
?>