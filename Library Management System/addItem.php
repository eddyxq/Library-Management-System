<html>
	<link rel="stylesheet" type="text/css" href="main.css">
	<body>
		<style>
	input[type=text], select {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	input[type=submit] {
	 width: 500px;
		display: inline-block;
		text-align: center;
		vertical-align: middle;
		padding: 40px 80px;
		border: 1px solid #225594;
		border-radius: 21px;
		background: #40a0ff;
		background: -webkit-gradient(linear, left top, left bottom, from(#40a0ff), to(#225594));
		background: -moz-linear-gradient(top, #40a0ff, #225594);
		background: linear-gradient(to bottom, #40a0ff, #225594);
		-webkit-box-shadow: #4dc0ff 0px 0px 40px 0px;
		-moz-box-shadow: #4dc0ff 0px 0px 40px 0px;
		box-shadow: #4dc0ff 0px 0px 40px 0px;
		text-shadow: #143257 1px 1px 1px;
		font: normal normal bold 20px arial;
		color: #ffffff;
		text-decoration: none;
	}

	input[type=submit]:hover,
	input[type=submit]:focus {
		border: 1px solid ##a48d88;
		background: #ffdcd4;
		background: -webkit-gradient(linear, left top, left bottom, from(#ffdcd4), to(#9d8883));
		background: -moz-linear-gradient(top, #ffdcd4, #9d8883);
		background: linear-gradient(to bottom, #ffdcd4, #9d8883);
		color: #ffffff;
		text-decoration: none;
	}
	input[type=submit]:active {
		background: #225594;
		background: -webkit-gradient(linear, left top, left bottom, from(#225594), to(#225594));
		background: -moz-linear-gradient(top, #225594, #225594);
		background: linear-gradient(to bottom, #225594, #225594);
	}

	div {
	  border-radius: 50px;
	  padding: 50px 1000px 300px 50px;
	}
	</style>

			<?php

			$Item_ID = $_GET["Item_ID"];
			$Item_Type = $_GET["Item_Type"];
			$Item_Location = $_GET["Item_Location"];
			
			if((strcmp($Item_Type, "Book") == 0) || (strcmp($Item_Type, "book") == 0))
			{
				header('Location: addBookInfo.php');
			}
			
			
			// Create connection
			$con=mysqli_connect("localhost","root","","lms");

			// Check connection
			if (mysqli_connect_errno($con))
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			  
			  $sql = "INSERT INTO inventory (Item_ID, Item_Type, Item_Location) VALUES ('". $Item_ID."','". $Item_Type ."','". $Item_Location ."')";
			 
			 if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }

			mysqli_close($con);
			?>
			
			<h1><p><font size="7" color="#ffffff">1 Item has been added</font></p></h1> 
			<form action="librarian.php" method="post">
				<input type="submit" value="Return">
			</form>
	</body>
</html>