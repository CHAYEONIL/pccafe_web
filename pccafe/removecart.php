<?php
session_start();
include_once('dbconnect.php');

$id = $_GET['id'];

$sql = "delete from cart where id = $id";

if($conn->query($sql)) 
{	
	echo "<script>
		  alert('해당 음식을 삭제하였습니다.');
		  location.href = 'cartcheck.php';
		  </script>";
}
else echo "회원정보 삭제 중에 오류가 발생했습니다.".$conn->error;
?>