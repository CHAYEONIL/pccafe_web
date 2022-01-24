<?php
// Doremi DB 연결
$server = "localhost";
$user = "root";
$password = "";
$dbname = "pccafe";

$conn = new mysqli($server,$user,$password,$dbname);  //server IP, account and password, dbname

if($conn->connect_error)
{
	die("pccafe db 접속 오류");
}

?>