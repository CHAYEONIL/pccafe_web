<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_POST['email'];
$money = $_POST['money'];
$time = $_POST['time'];

// UPPDATE sql 작성

$sql = "update user set money = $money , time = '$time' 
		where email = '$email'";

/*
$sql = "update user set money = $resultmoney, time = '$new_time' 
        where email = '$email' ";*/

// sql 실행
if($conn->query($sql))
{
	echo "<script>
		  alert('$email 회원의 정보가 변경되었습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}	
else
{
	echo "회원정보 변경에 오류가 발생하였습니다.<br>".$conn->error;
}


?>