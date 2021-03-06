<!DOCTYPE html>
<html>
<head>
	<title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>


<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
	
	
		<h2> Login Here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>User ID</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Login </button>
		</form>
	</div>


	<div class="col-md-6 login-right">
		<h2> Register Here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>User ID</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>

				<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control" required>
			</div>
					<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control" required>
			</div>
					<div class="form-group">
				<label>E-mail Address</label>
				<input type="text" name="email" class="form-control" required>
			</div>

					<div class="form-group">
				<label>Phone number</label>
				<input type="tel" name="phone"  class="form-control" required>
			</div>


					<div class="form-group">
					<label for="course">Please select your course</label>
					<div>
						<label for="bsit" class="radio-inline"><input type="radio" name="course" value="bsit" id="bsit">BSIT</label>
						<label for="bsba" class="radio-inline"><input type="radio" name="course" value="bsba" id="bsba">BSBA</label>
						<label for="bssw" class="radio-inline"><input type="radio" name="course" value="bssw" id="bssw">BSSW</label>
						<label for="bsed" class="radio-inline"><input type="radio" name="course" value="bsed" id="bsed">BSED</label>
			
					</div>	
			</div>
					<div class="form-group">
				<label for="yearlevel">Please select your year level</label>
					<div>
						<label for="1" class="radio-inline"><input type="radio" name="yearlevel" value="1" id="1">1st Year</label>
						<label for="2" class="radio-inline"><input type="radio" name="yearlevel" value="2"  id="2">2nd Year</label>
						<label for="3" class="radio-inline"><input type="radio" name="yearlevel" value="3"  id="3">3rd Year</label>
						<label for="4" class="radio-inline"><input type="radio" name="yearlevel" value="4"  id="4">4th Year</label>
			
					</div>	
			</div>
			<button type="submit" class="btn btn-primary"> Register </button>
		</form>
	</div>

</div>
</div>

</div>
<script>

	document.querySelector('.button').onclick = function(){

		var password = document.querySelector('.password').value,
			confirm = document.querySelector('.confirm').value;

			if(password == ""){
				alert("Field cannot be empty.");
			}
			else if(password != confirm){
				alert("Password does not match")
			}

	}
</script>
</body>
</html>
