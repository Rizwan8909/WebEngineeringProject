<!DOCTYPE html>
<html>
<head>
	<title>Admission Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="shortcut icon" type="image/png" href="fav.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row"><div class="alert alert-danger pr-5 ml-5 mt-3" role="alert">
  			<strong>Error! </strong>There is a Problem while submitting the admission Form<a href="" class="close ml-5 pb-1" data-dismiss="alert">&times;</a>
		</div>
		
		</div>
	</div>

	
		<div class="row">

			<div class="col-sm-11 mx-auto" >
				<h3 class="m-2 p-3">Applicant Admission Form</h3>
				<div class="card m-2"> <!--Perosnal Information Starts from here-->
				  <div class="card-header bg-success text-white">
				    <h5>Personal Information</h5>
				  </div>
	<form name="admission_form" method="post" action="admission_register.php">
				  <div class="card-body rounded-0">
				   
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="FirstName1">First Name</label>
					      <input type="text" class="form-control" id="FirstName1" placeholder="First Name" name="FirstName">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="LastName1">Last Name</label>
					      <input type="text" class="form-control" id="LastName1" placeholder="Last Name" name="LastName">
					    </div>

					    <div class="form-group col-md-6">
					      <label for="FatherName1">Father's Name</label>
					      <input type="text" class="form-control" id="FatherName1" placeholder="Father's Namee" name="FatherName">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="FatherOccupation1">Father's Occupation</label>
					      <input type="text" class="form-control" id="FatherOccupation1" placeholder="Father's Occupation" name="FatherOccupation">
					    </div>
					  </div>


					  <div class="form-row">
					  	<div class="form-group col-md-12">
					      <label for="CNIC1">CNIC</label>
					      <input type="number" class="form-control" id="CNIC1" placeholder="CNIC" name="CNIC">
					    </div>
					  </div>

					<div class="form-row">
					  	<div class="form-group col-md-4">
					      <label for="Nation1">Nationality</label>
					      <select id="Nation1" class="form-control" name="Nationality">
					        <option selected>Choose...</option>
					        <option>Pakistan</option>
					        <option>India</option>
					        <option>Bangladesh</option>
					        <option>Other</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="Religion1">Religion</label>
					      <select id="Religion1" class="form-control" name="Religion">
					        <option selected>Choose...</option>
					        <option>Islam</option>
					        <option>Hinduism</option>
					        <option>Christanity</option>
					        <option>Budhism</option>
					        <option>Sikhism</option>
					        <option>Other</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="Gender1">Gender</label>
					      <select id="Gender1" class="form-control" name="Gender">
					        <option selected>Choose...</option>
					        <option>Male</option>
					        <option>Female</option>
					        <option>Other</option>
					      </select>
					    </div>
					</div>

					  <div class="form-row">
					  	<div class="form-group col-md-4">
					      <label for="DOB1">Date of Birth</label>
					      <input type="date" class="form-control" id="DOB1" name="DOB">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="PlaceBirth1">Place of Birth</label>
					      <input type="text" class="form-control" id="PlaceBirth" placeholder="Place of Birth" name="POB">
					    </div>
					  	<div class="form-group col-md-4">
					      <label for="Marital1">Marital Status</label>
					      <select id="Marital1" class="form-control" name="Status">
					        <option selected>Choose...</option>
					        <option>Maried</option>
					        <option>Unmaried</option>
					        <option>Divorsed</option>
					      </select>
					    </div>
					  </div>


					  <div class="form-row">
						  <div class="form-group col-md-12">
						    <label for="PostAddress1">Address</label>
						    <input type="text" class="form-control" id="Address1" placeholder="1234 Main St" name="address">
						  </div>
					  </div>

					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="PostalCode1">Postal Code</label>
					      <input type="text" class="form-control" id="PostalCode1" placeholder="e.g 1234" name="PostalCode">
					    </div>
					      <div class="form-group col-md-6">
					      <label for="Country1">Country</label>
					      <input type="text" class="form-control" id="Country1" placeholder="Country" name="Country">
					    </div>
					</div>

					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="Email1">Email</label>
					      <input type="email" class="form-control" id="Email1" placeholder="e.g something@some.com" name="Email">
					    </div>
					      <div class="form-group col-md-6">
					      <label for="MbNumber1">Mobile Number</label>
					      <input type="text" class="form-control" id="MbNumber1" placeholder="e.g 0312 3456789" name="Mobile">
					    </div>
					</div>

					 <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="Domicile1">District of Domicile</label>
					      <input type="text" class="form-control" id="Domicile1" placeholder="Domicile" name="District">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="Urban1">Urban/Rural</label>
					      <select id="Urban1" class="form-control" name="Citizen">
					        <option selected>Choose...</option>
					        <option>Urban</option>
					        <option>Rural</option>
					      </select>
						</div>
					</div>
				  </div>

				</div>
			</div>
		</div> <!--Row 1-->


		<div class="row">
			<div class="col-sm-11 mx-auto" >
				<div class="card m-2"> <!--Previoud acedamic record starts from here-->
				  <div class="card-header bg-success text-white">
				    <h5>Previous Education/Academic Record</h5>
				  </div>

				  <div class="card-body rounded-0">
				  		<h5 class="bg-dark p-2 text-light">Secondary School Certificate SSC/0-level</h5>
					  <div class="form-row">
					  	<div class="form-group col-md-1">
					      <label for="degree1">Degree</label>
					      <input type="text" class="form-control" id="degree1" name="Degree1">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="SeatNo1">Seat No. </label>
					      <input type="text" class="form-control" id="SeatNo1" name="seatNo1" >
					    </div>
					    <div class="form-group col-md-2">
					      <label for="Institute1">Institution</label>
					      <input type="text" class="form-control" id="Institute1" name="Institution1">
					    </div>
					    <div class="form-group col-md-3">
					      <label for="Board1">Board</label>
					      <input type="text" class="form-control" id="Board1" name="board1">
					    </div>
					    <div class="form-group col-md-3">
					      <label for="Group1">Group</label>
					      <input type="text" class="form-control" id="Group1" name="group1">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="YearF1">Year From</label>
					      <input type="text" class="form-control" id="YearF1" name="yearFrom1">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="YearT1">Year to</label>
					      <input type="text" class="form-control" id="YearT1" name="yearTo1">
					    </div>
					  </div>

					<div class="form-row">
						<div class="form-group col-md-1">
					      <label for="Marks1">Marks</label>
					      <input type="text" class="form-control" id="Marks1" name="marks1">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="Tmarks1">Total Marks</label>
					      <input type="text" class="form-control" id="Tmarks1" name="Totalmarks1">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="Percentage1">Percentage</label>
					      <input type="text" class="form-control" id="Percentage1" name="percentage1">
					    </div>
					    <div class="form-group col-md-1"></div>

					  	<div class="form-group col-md-4">
					      <label for="Grade1">Grade</label>
					      <select id="Grade1" class="form-control" name="grade1">
					        <option selected>Choose...</option>
					        <option>A-1</option>
					        <option>A</option>
					        <option>B</option>
					        <option>C</option>
					        <option>D</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="Type1">Annual/Supp</label>
					      <select id="Type1" class="form-control" name="type1">
					        <option selected>Choose...</option>
					        <option>Annual</option>
					        <option>Suplimentry</option>
					      </select>
					    </div>
					    
					    
					</div>

				  </div>

				    <div class="card-body rounded-0">
				  		<h5 class="bg-dark p-2 text-light">Secondary School Certificate SSC/0-level</h5>
					  <div class="form-row">
					  	<div class="form-group col-md-1">
					      <label for="Degree2">Degree</label>
					      <input type="text" class="form-control" id="degree2" name="Degree2">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="SeatNo2">Seat No. </label>
					      <input type="text" class="form-control" id="SeatNo2" name="seatNo2">
					    </div>
					    <div class="form-group col-md-2">
					      <label for="Institute2">Institution</label>
					      <input type="text" class="form-control" id="Institute2" name="Institution2">
					    </div>
					    <div class="form-group col-md-3">
					      <label for="Board2">Board</label>
					      <input type="text" class="form-control" id="Board2" name="borad2">
					    </div>
					    <div class="form-group col-md-3">
					      <label for="Group2">Group</label>
					      <input type="text" class="form-control" id="Group2" name="group2">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="YearF2">Year From</label>
					      <input type="text" class="form-control" id="YearF2" name="yearFrom2">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="YearT2">Year to</label>
					      <input type="text" class="form-control" id="YearT2" name="yearTo2">
					    </div>
					  </div>

					<div class="form-row">
						<div class="form-group col-md-1">
					      <label for="Marks2">Marks</label>
					      <input type="text" class="form-control" id="Marks2" name="marks2">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="Tmarks2">Total Marks</label>
					      <input type="text" class="form-control" id="Tmarks2" name="Totalmarks2">
					    </div>
					    <div class="form-group col-md-1">
					      <label for="Percentage2">Percentage</label>
					      <input type="text" class="form-control" id="Percentage2" name="percentage2">
					    </div>
					    <div class="form-group col-md-1"></div>

					  	<div class="form-group col-md-4">
					      <label for="Grade2">Grade</label>
					      <select id="Grade2" class="form-control" name="grade2">
					        <option selected>Choose...</option>
					        <option>A-1</option>
					        <option>A</option>
					        <option>B</option>
					        <option>C</option>
					        <option>D</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="Type2">Annual/Supp</label>
					      <select id="Type2" class="form-control" name="type2">
					        <option selected>Choose...</option>
					        <option>Annual</option>
					        <option>Suplimentry</option>
					      </select>
					    </div>
					    
					    
					</div>


					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					        Check me out
					      </label>
					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary" onclick="validateRegistration()">Submit</button>
				  </div>
				</div>
			</div>
		</div> <!--Row 2-->
	</form>




	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	function validateRegistration(){
		var regex = /^[a-zA-Z]+$/;
		document.getElementById('FirstName1').value;
		if(regex.test(FirstName1)==false){
			alert("First Name must be in alphabets only");
		}
		FirstName1.focus();
		return false;
	}

</script>
</body>
</html>