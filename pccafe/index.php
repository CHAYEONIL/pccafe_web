<!DOCTYPE html>
<html>
<head>
    <title>PC Cafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        background: #e2e1e0;
        text-align: center;
    }
    h1 {
		text-align: center;
		color: white;
		font-size: 35px;
    }
	h2 {
		float: left;
		color: black;
		font-size: 20px;
    }
	h3 {
		float: left;
		color: black;
		font-size: 15px;
    }
    /* Add a black background color to the top navigation */
        .topnav {
            background-color: #333;
            overflow: hidden;
        }
 
	/* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
 
    /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
 
    /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
 
    /* Right-aligned section inside the top navigation */
        .topnav-right {
            float: right;
        } 
		.topnav-left {
            float: left;
        } 
	#common	{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }
    #common td, #common th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    #common tr:nth-child(even){background-color: #f2f2f2;}
    #common tr:hover {background-color: #ddd;}
    #common th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #333;
        color: white;
    }    
     </style>
</head>
<body>
<?php
session_start();
include_once('dbconnect.php');
echo "<div class='topnav'>";
echo "<h1>PC방 홈페이지</h1>";
echo "<a href='index.php' class='active'>Home</a>";
echo "<a href='#'>Event</a>";
echo "<a href='#'>Notice</a>";
echo "<br><br>";
if(!isset($_SESSION['uid']))
{
	echo "<br>";
	echo "<div class='topnav-left'>";
	echo "<a href='bossfind.php'>사장 계정찾기</a>";
	echo "<a href='bosssignup.html'>사장 회원가입</a>";
	echo "<a href='bosssignin.html'>사장 로그인</a>";
	echo "</div>";
	
	echo "<div class='topnav-right'>";
	echo "<a href='userfind.php'>사용자 계정찾기</a>";
	echo "<a href='usersignup.html'>사용자 회원가입</a>";
	echo "<a href='usersignin.html'>사용자 로그인</a>";
	echo "</div>";
}
echo "</div>";
?>
<h2>- 공지사항 -</h2>
<br>
<br>
<br>
<h3> 이용하는데 필요한 정보들입니다. </h3>
<br>
<br>
<br>
		<table id='common'>
			<tr>
				<th>NO</th><th>제목</th><th>작성자</th><th>작성일</th>
			</tr>
			<tr>
				<th>01</th><th>환영합니다</th><th>관리자</th><th>2020.01.01</th>
			</tr>
			<tr>
				<th>02</th><th>로그인과 가입은 위를 참고해주세요</th><th>관리자</th><th>2020.01.01</th>
			</tr>
			<tr>
				<th>03</th><th>사장님 로그인은 좌측, 사용자 로그인은 우측에 있습니다</th><th>관리자</th><th>2020.01.01</th>
			</tr>
</table>
<br>
<h2>- 게임순위 -</h2>
<br>
<br>
<br>
<h3> 게임 순위입니다 참고해주세요. </h3>
<br>
<br>
<br>
		<table id='common'>
			<tr>
				<th>순위</th><th>게임명</th><th>출시일</th>
			</tr>
			<tr>
				<th>01</th><th>ABC</th><th>20xx.xx.xx</th>
			</tr>
			<tr>
				<th>02</th><th>DEF</th><th>20xx.xx.xx</th>
			</tr>
			<tr>
				<th>03</th><th>GHI</th><th>20xx.xx.xx</th>
			</tr>
			<tr>
				<th>04</th><th>JKL</th><th>20xx.xx.xx</th>
			</tr>
			<tr>
				<th>05</th><th>MNO</th><th>20xx.xx.xx</th>
			</tr>
</body>
</html>

