<!---developed by Ayaulym Chinaliyeva--->
<!DOCTYPE html>
<html>
<head>
	<title>Thank you!</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" href="logo.png">
	<body background="https://pbs.twimg.com/media/DJiGy5DX0AA5HYk.jpg">
</head>
<body>
	<div align="center">
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);

		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$phoneNumber = $_POST['mobile'];
		$armyCheck = $_POST['armyCheck'];
		$bias = $_POST['bias'];
		$lastAlbum = $_POST['lastAlbum'];


		if ($armyCheck==="no" || $armyCheck==="other") {
			echo '<span style="color:#111;text-align:center;font-size:50px;">You said you are not an ARMY. GO AWAY.';
		}
		else{
			if ($lastAlbum==="NoMoreDream" || $lastAlbum==="YoungForever") {
				echo '<span style="color:#111;text-align:center;font-size:50px;">You did not answer checking question correctly. <br> You are not ARMY.';
			}
			else{
				$sql = "INSERT INTO `registrationbtssite`.`armys` (`fullName`, `gender`, `age`, `phoneNumber`, `army`, `bias`, `miniAlbum`) VALUES ('$fullname', '$gender', '$age', '$phoneNumber', '$armyCheck', '$bias', '$lastAlbum');";
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				}

				if ($conn->query($sql) === TRUE) {
				    echo '<span style="color:#111;text-align:center;font-size:50px;">You registered successfully.';
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
						}
		}
?>
</div>
</body>
</html>