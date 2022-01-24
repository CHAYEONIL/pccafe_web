<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_SESSION['uid'];
$havemoney = $_SESSION['money'];   // 원래 가진 돈
$money = $_GET['money'];     // 충전할 돈
$cafename = $_SESSION['cafename'];

$resultmoney = $havemoney + $money;

/* 데이터 확인용
echo "havemoney : "."$havemoney<br>";
echo "money : "."$money<br>";
echo "resultmoney : "."$resultmoney<br>"; */

$_SESSION['money'] = $resultmoney;    // 세션에도 충전후 금액을 날려줌

// db에 충전한 금액 저장 시켜줌
$sql = "update user set money = $resultmoney where email = '$email'";

// 사장 돈 추가 해주기 위해 해당 pc방사장 정보를 불러옴
$sql2 = "select * from boss where cafename = '$cafename'";
$result = $conn->query($sql2);

if($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	$bossmoney = $row['money'];
	$totalmoney = $bossmoney + $money;
	$sql3 = "update boss set money = $totalmoney where cafename = '$cafename'";
	
	if(!$conn->query($sql3))
	{
		echo "사장 돈을 추가 해주는데 오류 발생".$conn->error;
	}
}
else
{
	echo "사장 테이블 불러오는데 오류 발생".$result->error;
}
// sql 실행

if($conn->query($sql))
{
	echo "<script>
		  alert('$money 만큼의 돈이 충전 되었습니다.');
		  location.href = 'userindex.php';
		  </script>";
}	
else
{
	echo "돈 충전하는 중 오류가 발생하였습니다.<br>".$conn->error;
}


?>