<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_SESSION['uid'];
$havemoney = $_SESSION['money'];
$money=$_GET['money'];
$currenttime = $_SESSION['producttime'];
$time = $_GET['time'];

if($havemoney >= $money)
{
	$resultmoney = $havemoney - $money;
}
else
{
	echo "<script>
		  alert('현재 소지한 돈이 차감될 금액보다 적습니다.');
		  history.back(); 
		  </script>";
    return;
}

$resulttime= $currenttime + $time;
$_SESSION['money'] = $resultmoney; 

// db에 충전한 금액 저장 시켜줌
$sql = "update boss set producttime = $resulttime, money = $resultmoney where email = '$email'";

// sql 실행
if($conn->query($sql))
{
	$_SESSION['producttime'] = $resulttime;
	echo "<script>
		  alert('상품 구입이 성공 하였습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}	
else
{
	echo "상품 구입 중 오류가 발생하였습니다.<br>".$conn->error;
}


?>