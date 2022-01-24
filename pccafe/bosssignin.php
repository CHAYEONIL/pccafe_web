<?php

session_start();  // 세션시작 호출

// Doremi DB 연결
include_once('dbconnect.php');

// 로그인 양식에 입력한 데이터 가져오기
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// SELECT 명령문 작성하기
$sql = "select * from boss where email = '$email' and password = '$pwd'";
// echo $sql;

$result = $conn->query($sql); // $result에는 select 실행 결과로 레코드 집합이 들어있음, 객체 

if($result->num_rows > 0)    // Select 한 결과 검색된 레코드가 있는 경우
{
    $row = $result->fetch_assoc();	// fetch_assoc() 함수는 레코드를 하나를 연관배열로 변환
    $_SESSION['uid'] = $email;  //세션 변수 uid 로그인한 유저 아이디
	$_SESSION['name'] = $row['name'];
	$_SESSION['cafename'] = $row['cafename'];
	$_SESSION['producttime'] = $row['producttime'];
	$_SESSION['money'] = $row['money'];

	
	echo "<script>
		  alert('로그인이 성공하였습니다.');
		  location.href = 'bossindex.php';
		  </script>";
}
else
	echo "로그인이 실패하였습니다. <br>이메일과 암호를 확인하기 바랍니다<br>";

?>