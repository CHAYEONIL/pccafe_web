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
echo "<h1>PC??? ????????????</h1>";

//???????????? ???????????????
if(!isset($_SESSION['uid']))
{
   echo " ????????? ?????? <br>";
}
else
{
	$email = $_SESSION['uid'];
	$name = $_SESSION['name'];
	$cafename = $_SESSION['cafename'];
	$producttime = $_SESSION['producttime'];
	$money = $_SESSION['money'];
	echo"<br>";
	echo "<div class='topnav-right'>";
	echo "<div class='login'>";
	echo "????????? ID : $email<br>";
	echo "PC??? ?????? : $cafename<br>";
	echo "?????? : $name<br>";
	echo "?????? ?????? ?????? : $producttime<br>";
	echo "?????? ?????? : $money<br><br>";
	echo "</div>";
	echo "</div>";
	echo "<br><br><br>";
	echo "<br><br><br>";
}
echo "<a href='bossindex.php' class='active'>Home</a>";
echo "<a href='#'>Event</a>";
echo "<a href='#'>Notice</a>";
echo "<div class='topnav-right'>";
echo "<a href='userlist.php'>?????? ??????</a>";
echo "<a href='bossmakefood.php'>????????????</a>";
echo "<a href='bosssignmodify.php'>Signmodify</a>";
echo "<a href='signout.php'>Logout</a>";
echo "</div>";
echo "<br><br>";

echo "</div>";
?>
<h2>- ???????????? -</h2>
<br>
<br>
<br>
		<table id='common'>
			<tr>
				<th>No</th><th>?????? ??????</th><th>??????</th><th>??????</th><th>??????</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1??? ??????</td>
				<td>400??????</td>
				<td>10??????</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=400&money=100000'" value class="btn">??????</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td>2??? ??????</td>
				<td>800??????</td>
				<td>19??????</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=800&money=190000'" value class="btn">??????</button></td>

			</tr>
			<tr>
				<td>3</td>
				<td>3??? ??????</td>
				<td>1600??????</td>
				<td>37??????</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=1600&money=370000'" value class="btn">??????</button></td>
			</tr>
			<tr>
				<td>4</td>
				<td>4??? ??????</td>
				<td>3000??????</td>
				<td>67??????</td>
				<td><button type="sumbit" onclick="location.href='bossbuytimeproc.php?time=3000&money=670000'" value class="btn">??????</button></td>
			</tr>
		</table>
