<?php
session_start();
include_once('dbconnect.php');

$email = $_GET['email'];

$sql = "delete from user where email = '$email'";

if($conn->query($sql)) 
{	
	echo "<script>
		  alert('회원정보를 삭제하였습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}
else echo "회원정보 삭제 중에 오류가 발생했습니다.".$conn->error;
?>