<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container-fluid" id="login">
		<div class="row mt-5">
			<img src="logobig.png" class="rounded mx-auto d-block" alt="..." class="">

		</div>
		<div class="row mx-auto mt-4">
			<div class="col-md-4 ml-5"></div>
			<div class="col-md-3">
				<form>
					  <div class="form-group">
					  	<h3 class="text-dark"><center>Please Sign in </center></h3>
					    <input type="email" class="form-control rounded-0 mx-md-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
					  </div>
					  <div class="form-group">
			
					    <input type="password" class="form-control rounded-0 mx-md-3" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-success btn-lg btn-block pl-5 pr-5 mx-md-3 rounded-0">Sign in</button>
					  <p class="ml-5 mt-3 text-secondary" id="registerAccount">Don't have an account? <a href="#">click here</a></p>
				</form>

			</div>
			<div class="col-md-3"></div>
		</div>
	</div>


	<div class="container-fluid" id="register">
		<div class="row mt-5">
			<img src="logobig.png" class="rounded mx-auto d-block" alt="..." class="">

		</div>
		<div class="row mx-auto mt-4">
			<div class="col-md-4 ml-5"></div>
			<div class="col-md-3">
				<form>
					  <div class="form-group">
					  	<h3 class="text-dark"><center>Register here</center></h3>
					    <input type="email" class="form-control rounded-0 mx-md-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
					  </div>

					  <div class="form-group">
			
					    <input type="text" class="form-control rounded-0 mx-md-3" id="exampleInputPassword1" placeholder="CNIC">
					  </div>

					  <div class="form-group">
			
					    <input type="password" class="form-control rounded-0 mx-md-3" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-success btn-lg btn-block pl-5 pr-5 mx-md-3 rounded-0">Sign in</button>
					  <p class="ml-5 mt-3 text-secondary" id="loginAccount">Back to login <a href="#">click here</a></p>
				</form>

			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$("#register").hide();
		$("#registerAccount").click(function(){
			$("#login").hide();
			$("#register").show();
		});
	});

	$(document).ready(function(){
		$("#loginAccount").click(function(){
			$("#register").hide();
			$("#login").show();
		});
	});

</script>
</body>
</html>