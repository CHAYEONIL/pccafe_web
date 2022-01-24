<?php

// DB 연결
session_start();
include_once('dbconnect.php');

$email = $_SESSION['uid'];
$totalspend = 0;
$money = $_SESSION['money'];

// 장바구니에 하나라도 있으면
if(isset($_GET['price']))
{
	// 모든 음식 가격을 더해줌
	foreach($_GET['price'] as $price)
	{
		$totalspend += $price;
	}	
	
	// 결제할 돈이 있으면 결제해줌
	if($money >= $totalspend)
	{
		$money -= $totalspend;
		$_SESSION['money'] = $money;
		
		$sql = "update user set money = $money where email = '$email'";
		
		if($conn->query($sql))
		{	
		}
		else
		{
			echo "돈 차감 시 버그 발생".$conn->error;
		}
	}
	else
	{
		echo "<script>
		  alert('돈이 부족합니다.');
		  location.href = 'userindex.php';
		  </script>";
		return;      // location.href 로 페이지를 이동시켜도 밑에 코드들이 실행되어 코드 자체를 종료해줌
	}
	
	// 음식들 구입했으니까 장바구니 테이블 컬럼 전부 삭제
	foreach($_GET['id'] as $id)
	{
		$sql = "delete from cart where id = $id";
		
		if($conn->query($sql))
		{	
		}
		else
		{
			echo "버그 발생".$conn->error;
		}
		
	}
}
	
// 구입완료
echo "<script>
		alert('구입이 완료 되었습니다.');
		location.href = 'userindex.php';
	  </script>";


?>