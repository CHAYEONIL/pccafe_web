<!DOCTYPE html>
<html>
<head>
    <title>회원 관리</title>
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
			.login {
				color: white;
            }
			 #board {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
            }
            #board td, #board th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #board tr:nth-child(even){background-color: #f2f2f2;}
            #board tr:hover {background-color: #ddd;}
            #board th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #333;
                color: white;
            }    
			 #time {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 90%;
            }
            #time td, #time th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #time tr:nth-child(even){background-color: #f2f2f2;}
            #time tr:hover {background-color: #ddd;}
            #time th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #333;
                color: white;
            }
		.btn {
			background-color: #333;
			color: white;
			padding: 16px 1px;
			border: none;
			cursor: pointer;
			width: 20%;
			opacity: 0.9;
		}
		.btn:hover {
			opacity: 1;
		}
		.btn2 {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-top: 10px;
			margin-left: 5px;
			float: right;
		}
		.btn2:hover {
			opacity: 1;
		}
     </style>
</head>
<body>
<?php
session_start();
include_once('dbconnect.php');
echo "<div class='topnav'>";
echo "<h1>PC방 홈페이지</h1>";

//로그인이 안되있으면
if(!isset($_SESSION['uid']))
{
   echo " 로그인 실패 <br>";
}
else
{
	$email = $_SESSION['uid'];
	$name = $_SESSION['name'];
	$cafename = $_SESSION['cafename'];
	$money = $_SESSION['money'];
	$time = $_SESSION['producttime'];
	
	echo"<br>";
	echo "<div class='topnav-right'>";
	echo "<div class='login'>";
	echo "로그인 ID : $email<br>";
	echo "이름 : $name<br>";
	echo "PC방 이름 : $cafename<br>";
	echo "남은 시간 : $time<br>";
	echo "소유한 자산 : $money<br><br>";
	echo "</div>";
	echo "</div>";
	echo "<br><br><br>";
	echo "<br><br><br>";
}
echo "<a href='bossindex.php' class='active'>Home</a>";
echo "<a href='#'>Event</a>";
echo "<a href='#'>Notice</a>";
echo "<div class='topnav-right'>";
echo "<a href='userlist.php'>회원 관리</a>";
echo "<a href='bossmakefood.php'>음식추가</a>";
echo "<a href='bosssignmodify.php'>Signmodify</a>";
echo "<a href='signout.php'>Logout</a>";
echo "</div>";
echo "</div>";

		// PC방 이름을 조건으로 해서 user 테이블 검색함
		$cafename = $_SESSION['cafename'];
		$sql = "select * from user where cafename = '$cafename'";
		$result = $conn->query($sql);   // 검색된 레코드 집합. 내부에 cursor가 현재 레코드를 가리킴.
		
		if($result->num_rows > 0)
		{
	?>
		<h2>회원 관리</h2>
		<br>
		<br>
		<br>
			<table id='time'>
			<tr>
				<th>아이디</th><th>이름</th><th>전화번호</th><th>소유한 돈</th><th>남은 시간</th>
			<?php while($row = $result->fetch_assoc()) { ?>
			</tr>
			<tr>
				<td><a href="usermanage.php?email=<?= $row['email']?>"><?= $row['email'] ?></a></td>
				<td><?= $row['name'] ?></td>
				<td><?= $row['tel'] ?></td>
				<td><?= $row['money'] ?></td>
				<td><?= $row['time'] ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php 
		    }
			else
			{
				echo "<script>
						alert('PC방에 회원이 한명도 없습니다.......');
						location.href = 'bossindex.php';
					  </script>";
			}
		?>
</body>
</html>








