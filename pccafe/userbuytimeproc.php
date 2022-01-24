<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_SESSION['uid'];
$havemoney = $_SESSION['money'];   // 원래 가진 돈
$money = $_GET['money'];     // 차감될 돈
$currenttime = $_SESSION['time']; // 현재 이미 충전된 시간
$hours = $_GET['hour'];
$min = $_GET['min'];

// 자기가 가진돈이 차감될 금액보다 충분하면 결제진행 아니면 결제중단
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

$h =  strtotime($currenttime);

// 시간 합치기
$convert = strtotime("+$min minutes", $h);
$convert = strtotime("+$hours hours", $convert);
$new_time = date('H:i:s', $convert);    // 변환한것을 문자열로 바꿈


$_SESSION['money'] = $resultmoney;    // 세션에도 충전후 금액을 날려줌
$_SESSION['time'] = $new_time;

// db에 충전 후 금액과 시간 저장 시켜줌
$sql = "update user set money = $resultmoney, time = '$new_time' 
        where email = '$email' ";
		

// sql 실행

if($conn->query($sql))
{
	echo "<script>
		  alert('$hours 시간 $min 분 만큼의 시간이 충전 되었습니다.');
		  history.back(); 
		  </script>";
}	
else
{
	echo "시간을 충전하는 중 오류가 발생하였습니다.<br>".$conn->error;
}
?>