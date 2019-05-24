<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admissionmanagement";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn){
		die("Conncetion failed : " . mysqli_connect_error());
	}

	$Firstname = $_POST["FirstName"];
	$Lastname = $_POST["LastName"];
	$Fathername = $_POST["FatherName"];
	$CNIC = $_POST["CNIC"];
	$FatherOccupation = $_POST["FatherOccupation"];
	$Nationality = $_POST["Nationality"];
	$Religion = $_POST["Religion"];
	$Gender = $_POST["Gender"];
	$DOB = $_POST["DOB"];
	$POB = $_POST["POB"];
	$Status = $_POST["Status"];
	$Address = $_POST["address"];
	$Postal = $_POST["PostalCode"];
	$Country = $_POST["Country"];
	$Email = $_POST["Email"];
	$Mobile = $_POST["Mobile"];
	$District = $_POST["District"];
	$Citizen = $_POST["Citizen"];
	



	$sql = "insert into applicantform (FName, LName, Father, FOccupation, CNIC, nationality, religion, gender, BirthDate, BirthPlace, status, address, postalcode , country, email, mobile, district, citizen) values ('$Firstname', '$Lastname', '$Fathername', '$FatherOccupation', '$CNIC', '$Nationality', '$Religion', '$Gender', '$DOB', '$POB', '$Status', '$Address', '$Postal', '$Country', '$Email', '$Mobile', '$District', '$Citizen')";

	if(mysqli_query($conn, $sql))
	{
		echo "<div class=" ."alert alert-success". "role=" . "alert" . ">
  Successfully Inserted Record!
</div>";
	}
	else{
		echo "Error : " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
 ?>