<html>
	<head>
		<title>GRIP</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body background="banks.jpg">
	<div class="topnav">
  
  
  	<a class="active" href="index.php">Home</a>
  <a class="active" href="transferdetails.php">Transaction History</a>
  <a class="active" href="viewusers.php">Users</a>
   <a class="active" href="about.php">About Us</a>


  </div>
</div>
</div>  <br><br><br><br>
<table class="viewusers">
	<center><h1 style="font-size: 60px;">Transaction History</h1></center><br><br>
	<tr>
		<th>Sender</th>
		<th>Reciever</th>
		<th>Amount</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfers";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<b><p style="padding: 10px;" class="footer">
Contact: 9273523163,
Email: rol123@gmail.com<br>
© Rolwyn Raju 2021
</p>	</b>
</body>
</html>