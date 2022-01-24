<!DOCTYPE html>
<html>
<head>
    <title>음식구매</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }
    body {
		background-color: #333;
        width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
	h2 {
		color : black;
	}
	p {
		color : white;
	}
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }
	input[type=number], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }
    input[type=submit], button, input[type=button] {
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
    input[type=submit]:hover, button:hover, input[type=button]:hover{
        background-color: #45a049;
    }
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }
    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
	.email {
		background-color: #ccc;
	}
	.button  {
		border-radius: 5px;
		border: none;
		color: white;
		padding: 12px 20px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		transition-duration: 0.4s;
		cursor: pointer;
		float: right;
	}

	.button1  {
		background-color: white;
		color: black;
		border: 2px solid #333;
	}

	.button1:hover {
		background-color: #333;
		color: white;
	}
    </style>
    </head>
    <body>
	    <?php
		session_start();
		include_once('dbconnect.php');
		$foodname = $_GET['foodname'];
		$price = $_GET['price'];
		
		?>
        <div class="container">
          <form action="addcartproc.php" method="get">
		  		<h2><?=$foodname?></h2>
					<input type="text" name="foodname" value="<?=$foodname?>" hidden>
					<input type="number" name="price" value="<?=$price?>" hidden>
			<hr>
            <div class="row">
              <div class="col-25">
                <label for="fname">수량</label>
              </div>
              <div class="col-75">
                <input type="number" name="qty" value="1">
              </div>
            </div>
		  		<div class="row">
					<button class="button button1" onclick="location.href='addcartproc.php'">추가</button>
				</div>
          </form>
        </div>
    </body>
</html>















