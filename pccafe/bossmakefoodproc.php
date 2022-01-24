<?php

session_start();
include_once('dbconnect.php');

// 데이터 읽어오기
$cafename = $_SESSION['cafename'];
$name = $_GET['name'];
$price = $_GET['price'];

// db에 추가작업 confirm은 새로추가 했으므로 확정을 안해준 상태로 저장
$sql = "insert into food(cafename,foodname,price) values('$cafename','$name', $price)";

if($conn->query($sql))
{
	echo "<script>
		  alert('음식 메뉴 추가에 성공 하셨습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}
else
{
	echo "용돈 기록을 추가 하는 중 에러가 발생하였습니다.".$conn->error;
}
?>