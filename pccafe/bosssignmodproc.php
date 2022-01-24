<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_POST['email'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];

// UPPDATE sql 작성

$sql = "update boss set name = '$name', password = '$pwd', tel = '$telno' 
		where email = '$email'";

// sql 실행

if($conn->query($sql))
{
	$_SESSION['name'] = $name;
	echo "<script>
		  alert('$name 회원의 정보가 변경되었습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}	
else
{
	echo "회원정보 변경에 오류가 발생하였습니다.<br>".$conn->error;
}


?>