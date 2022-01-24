<?php
// Database 연결x
include_once('dbconnect.php');

if($conn->connect_error)
{
	die("pccafe db 접속 오류");
}

// 회원가입 양식에 입력된 데이터 가져오기

$email = $_POST['email'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];
$cafename = $_POST['cafename'];


// INSERT 명령문 작성
$sql = "insert into user values('$email','$pwd','$name','$telno', '$cafename' ,0 , 0)";

if($conn->query($sql))
{
	echo "<script>
		  alert('$name 님의 회원가입이 성공하였습니다.');
		  location.href = 'index.php';
		  </script>";
 }
else
{
	echo "회원가입 처리 과정에 오류가 발생하였습니다.<br>".$conn->error;
	echo "<a href='index.php'>메인페이지이동</a>";
}

?>