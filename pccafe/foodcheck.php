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
	$money = $_SESSION['money'];
	$time = $_SESSION['time'];
	
	echo"<br>";
	echo "<div class='topnav-right'>";
	echo "<div class='login'>";
	echo "????????? ID : $email<br>";
	echo "?????? : $name<br>";
	echo "PC??? ?????? : $cafename<br>";
	echo "?????? ?????? : $time<br>";
	echo "????????? ?????? : $money<br><br>";
	echo "</div>";
	echo "</div>";
	echo "<br><br><br>";
	echo "<br><br><br>";
}
echo "<a href='userindex.php' class='active'>Home</a>";
echo "<a href='#'>Event</a>";
echo "<a href='#'>Notice</a>";
echo "<div class='topnav-right'>";
echo "<a href='cartcheck.php'>???????????? ??????</a>";
echo "<a href='foodcheck.php'>????????????</a>";
echo "<a href='usersignmodify.php'>Signmodify</a>";
echo "<a href='signout.php'>Logout</a>";
echo "</div>";
echo "</div>";

		// PC??? ????????? ???????????? ?????? food ????????? ?????????
		$cafename = $_SESSION['cafename'];
		$sql = "select * from food where cafename = '$cafename'";
		$result = $conn->query($sql);   // ????????? ????????? ??????. ????????? cursor??? ?????? ???????????? ?????????.
		
		if($result->num_rows > 0)
		{
	?>
		<h2>?????? ??????</h2>
		<br>
		<br>
		<br>
		<table id='common'>
			<tr>
				<th>No</th><th>?????? ??????</th><th>??????</th><th>??????</th>
			<?php while($row = $result->fetch_assoc()) { ?>
			</tr>
			<tr>
				<td><?= $row['no'] ?></td>
				<td><?= $row['foodname'] ?></td>
				<td><?= $row['price'] ?></td>
				<td><input class="btn" type="button" onclick="location.href='addcart.php?foodname=<?= $row['foodname'] ?>&price=<?= $row['price'] ?>'"
				value="??????"></td>
			</tr>
			<?php } ?>
		</table>
		<?php 
		    }
			else
			{				
				echo "????????? ????????? ????????? ????????????.<br>";
			}
		?>
</body>
</html>








