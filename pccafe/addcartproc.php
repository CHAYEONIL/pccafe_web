<?php

session_start();
include_once('dbconnect.php');
$email = $_SESSION['uid'];
$foodname = $_GET['foodname'];
$qty = $_GET['qty'];
$price = $_GET['price'];

$total = $price * $qty;

$sql = "insert into cart(email,foodname,qty,price) 
		values('$email','$foodname',$qty,$total)";
echo "$sql <br>";

if($conn->query($sql))
{
	echo "<script>
		  alert('음식을 장바구니에 넣었습니다.');
		  location.href = 'userindex.php';
		  </script>";
}
else
{
	echo "장바구니에 피자 추가를 하지 못하였습니다.". $conn->error;
}
?>