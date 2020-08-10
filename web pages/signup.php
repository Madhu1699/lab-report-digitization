<?php 
session_start();
 ?>

 <?php
       
        
  
  				if(isset($_POST['submit'])){
			

					$conn=mysqli_connect('localhost','root','','lab');
					//mysqli_select_db($conn,'dkte');
					echo "success";

					


						$dob=$_POST['dob'];
						$name=$_POST['name'];
						$phone=$_POST['contact'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$blood=$_POST['blood_grp'];
						$address=$_POST['address'];

						
						
						//echo "<script>alert('Hello')</script>";
						//echo "<script>document.getElementById('uname').innerHTML='';</script>";
						
						
						
						
						//print_r($username);
						//echo "<br>";
						//print_r($files);

						//$filename=$files['name'];
						//$filerror=$files['error'];
						//$filetmp=$files['tmp_name'];


						//$q="INSERT INTO `report`(`name`, `dob`, `blood_grp`, `donate`, 'contact',`address`, `email`, `password`) VALUES (upper('$name'),'$dob','$blood_grp','$donate','$contact',upper('$address'),'$email','$password')";

						$query="INSERT INTO report VALUES (upper('$name'),'$dob','$blood','$phone',upper('$address'),'$email','$password')";
						$result=mysqli_query($conn,$query);

						if($result)
						{

							echo "data inserted";
							echo "<script>alert('Login to view your information');</script>";
							header("Location: Login.php");
							
						

						}else{
							echo "data not inserted";
							//echo "<script>alert('Email or Contact already present');</script>";
							
							

						
						}
				}else{
					//echo "All Fields are required";
				}
				?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="col-lg-7 m-auto">
		<form name="signupform" class="form-group" method="post" enctype="multipart/form-data" onsubmit="return validate_form();">
			<br><br><div class="shadow">
				<div class="card-header" style="background-color: #2897B1;">
					<h1 class="text-white text-center">Signup Here!</h1>
				</div><br>
		<!--<form class="form-group" method="post" enctype="multipart/form-data">-->
			<div style="width: 80%; margin-left: 50px;">
			<label for="name"><h3>Name</h3></label>
				<input type="text" name="name" class="form-control" autocomplete="on" id="name" placeholder="Enter Name">
				<span id="uname" class="text-danger font-weight=bold"></span>
			

			<label for="dob"><h3>Birth Date</h3></label>
				<input type="date" name="dob" class="form-control" autocomplete="on" id="dob">
				<span id="udob" class="text-danger font-weight=bold"></span>

			
			<label for="blood_grp"><h3>Blood Group</h3></label>
			<input list="blood_grp" name="blood_grp" class="form-control" autocomplete="off" placeholder="Enter Blood Group">
  				<datalist id="blood_grp">
   				 	    <option value="A+">
					    <option value="A-">
					    <option value="B+">
					    <option value="B-">
					    <option value="O+">
					    <option value="O-">
					    <option value="AB+">
					    <option value="AB-">
  				</datalist>	
  				<span id="ublood" class="text-danger font-weight=bold"></span>

			<label for="contact"><h3>Phone Number</h3></label>
				<input type="text" name="contact" class="form-control" autocomplete="on" id="contact" placeholder="Enter Phone Number">
				<span id="ucontact" class="text-danger font-weight=bold" ></span>


			<label for="address"><h3>City</h3></label>
				<input type="text" name="address" class="form-control" autocomplete="on" id="address" placeholder="Enter address">
				<span id="uaddress" class="text-danger font-weight=bold"></span>


			<label for="email"><h3>Email</h3></label>
				<input type="email" name="email" class="form-control" autocomplete="on" id="email" placeholder="Enter Email">
				<span id="uemail" class="text-danger font-weight=bold"></span>

			<label for="password"><h3>Password</h3></label>
				<input type="password" name="password" class="form-control" autocomplete="on" id="p1" placeholder="Enter Password">
				<span id="up1" class="text-danger font-weight=bold"></span>

			<label for="password2"><h3>Confirm Password</h3></label>
				<input type="password" name="password2" class="form-control" autocomplete="on" id="p2" placeholder="Confirm Password">
				<span id="up2" class="text-danger font-weight=bold"></span>

			<br>
			<center><input type="submit" name="submit" class="btn btn-primary" style="width: 70%;"></center>
			<br>
		<center><input type="button" name="cancel" value="Cancel" class="btn btn-danger" onClick="location.href='index.php'" style="width: 70%; margin-bottom: 40px;"></center>
			
			</div>

		</div>	
			
		</form>
	</div>
	</div>

	<script type="text/javascript">
		function validate_form(){
			var name = document.getElementById('name').value;
			var blood_grp = document.getElementById('blood_grp').value;
			var contact = document.getElementById('contact').value;
			var dob = document.getElementById('dob').value;
			var address = document.getElementById('address').value;
			var email = document.getElementById('email').value;
			var p1 = document.getElementById('p1').value;
			var p2 = document.getElementById('p2').value;


			var isValid=true;
			document.getElementById('uname').innerHTML="";
			document.getElementById('ublood').innerHTML="";
			document.getElementById('ucontact').innerHTML="";
			document.getElementById('udob').innerHTML="";
			document.getElementById('ublood').innerHTML="";
			document.getElementById('uaddress').innerHTML="";
			document.getElementById('uemail').innerHTML="";
			document.getElementById('up1').innerHTML="";
			document.getElementById('up2').innerHTML="";

			
			if(name.length<=2 || name.length>50){
				document.getElementById('uname').innerHTML="**Name length must be between 2 and 50";
				isValid=false;
			}
			
			if(!isNaN(name)){
				document.getElementById('uname').innerHTML="**Only characters are allowed";
				isValid=false;
			}
			
			if(name==""){
				document.getElementById('uname').innerHTML="**Please fill this field";
				isValid=false;
			}
			
			if(blood_grp==""){
				document.getElementById('ublood').innerHTML="**Please fill this field";
				isValid=false;
			}


			if(contact.length!=10){
				document.getElementById('ucontact').innerHTML="**Contact must be 10 digits";
				isValid=false;
			}

			if(isNaN(contact)){
				document.getElementById('ucontact').innerHTML="**Characters are not allowed";
				isValid=false;
			}
	

			if(contact==""){
				document.getElementById('ucontact').innerHTML="**Please fill this field";
				isValid=false;
			}

			if(dob==""){
				document.getElementById('udob').innerHTML="**Please fill this field";
				isValid=false;
			}

			

			if(!isNaN(address)){
				document.getElementById('uaddress').innerHTML="**Only characters are allowed";
				isValid=false;
			}

			if(address==""){
				document.getElementById('uaddress').innerHTML="**Please fill this field";
				isValid=false;
			}


			

			if(email.indexOf('@')<=0){
				document.getElementById('uemail').innerHTML="**Invalid Email";
				isValid=false;
			}

			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
				document.getElementById('uemail').innerHTML="**Invalid Email";
				isValid=false;
			}

			if(email==""){
				document.getElementById('uemail').innerHTML="**Please fill this field";
				isValid=false;
			}

			if(p1!=p2){
				document.getElementById('up2').innerHTML="**Both password should match";
				isValid=false;
			}

			if(p1.length<4 || p1.length>20){
				document.getElementById('up1').innerHTML="**Password length must be between 5 and 20";
				isValid=false;
			}

			

			if(p1==""){
				document.getElementById('up1').innerHTML="**Please fill this field";
				isValid=false;
			}

			if(p2==""){
				document.getElementById('up2').innerHTML="**Please fill this field";
				isValid=false;
			}

			return isValid;
		}
	</script>
</body>
</html>


    
        

<!--    

<script type="text/javascript">
	function validate_form(){
		valid=true;
		if(document.signupform.name.value=="" || document.signupform.branch.value=="" || document.signupform.yop.value=="" || document.signupform.contact.value=="" || document.signupform.dob.value=="" || document.signupform.address.value=="" || document.signupform.email.value=="" || document.signupform.password.value=="" || document.signupform.file.value==""){
			alert("Please fill out all details");


			valid=false
			}
			if(document.signupform.password.value!=document.signupform.password2.value)
			{
				alert("Both password should match");
				valid=false
			}
		

		return valid;
	}
</script>


   -->
