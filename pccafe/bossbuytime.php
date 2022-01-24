<!DOCTYPE html>
<html>
<head>
    <title>상품 구입</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body 
		{
            text-align: center;
        }
        #product 
		{
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #product td, #product th 
		{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #product tr:nth-child(even){background-color: #f2f2f2;}
        #product tr:hover {background-color: #ddd;}
        #product th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            }
		.btn {
			background-color: #4CAF50;
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
	$email = $_SESSION['uid'];
	
	?>
		<h1>상품 구입</h1>
		<table id='product'>
			<tr>
				<th>No</th><th>상품 이름</th><th>시간</th><th>가격</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1번 상품</td>
				<td>400시간</td>
				<td>10만원</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=400&money=100000'" value class="btn">충전</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td>2번 상품</td>
				<td>800시간</td>
				<td>19만원</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=800&money=190000'" value class="btn">충전</button></td>

			</tr>
			<tr>
				<td>3</td>
				<td>3번 상품</td>
				<td>1600시간</td>
				<td>37만원</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=1600&money=370000'" value class="btn">충전</button></td>
			</tr>
			<tr>
				<td>4</td>
				<td>4번 상품</td>
				<td>3000시간</td>
				<td>67만원</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=&money=670000'" value class="btn">충전</button></td>
			</tr>
		</table>
		<form>
			<input class="btn2" type="button" onclick="location.href='bossindex.php'"
				value="메인메뉴로 돌아가기">
		</form>
</body>
</html>








