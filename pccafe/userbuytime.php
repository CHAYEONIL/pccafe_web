<!DOCTYPE html>
<html>
<head>
    <title>시간 충전</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        text-align: center;
    }
    #common {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
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
		<h1>시간 충전</h1>
		<table id='common'>
			<tr>
				<th>No</th><th>시간</th><th>금액</th>
			</tr>
			<tr>
				<td>1.</td>
				<td>1시간</td>
				<td>1000원</td>
				<td><button type="sumbit" onclick="location.href='userbuytimeproc.php?money=1000&hour=1&min=0'" value class="btn">충전</button></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>2시간 30분</td>
				<td>2000원</td>
				<td><button type="sumbit" onclick="location.href='userbuytimeproc.php?money=2000&hour=2&min=30'" value class="btn">충전</button></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>6시간</td>
				<td>5000원</td>
				<td><button type="sumbit" onclick="location.href='userbuytimeproc.php?money=5000&hour=6&min=0'" value class="btn">충전</button></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>12시간</td>
				<td>10000원</td>
				<td><button type="sumbit" onclick="location.href='userbuytimeproc.php?money=10000&hour=12&min=0'" value class="btn">충전</button></td>
			</tr>
		</table>
		<form>
			<input class="btn2" type="button" onclick="location.href='userindex.php'"
				value="메인메뉴로 돌아가기">
		</form>
</body>
</html>








