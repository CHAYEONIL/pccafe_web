<?php

session_start();  // 세션시작 호출

// DB 연결
include_once('dbconnect.php');

$name = $_POST['name'];
$cafename = $_POST['cafename'];

// SELECT 명령문 작성하기
$sql = "select * from boss where name = '$name' and cafename = '$cafename'";

$result = $conn->query($sql); // $result에는 select 실행 결과로 레코드 집합이 들어있음, 객체 

if($result->num_rows > 0)    // Select 한 결과 검색된 레코드가 있는 경우
{
    $row = $result->fetch_assoc();	// fetch_assoc() 함수는 레코드를 하나를 연관배열로 변환
    $email = $row['email'];
	
	echo "<script>
		  alert('찾으신 계정 id는 $email 입니다.');
		  location.href = 'index.php'; 
		  </script>";
		  
}
else
{
	echo "<script>
		  alert('계정 찾기에 실패하였습니다. 이름과 PC방 이름을 확인하기 바랍니다');
		  location.href = 'index.php'; 
		  </script>";
}
?>