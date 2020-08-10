 
<html>
<head>
	<title>Display Alumni</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form name="contactform" method="post" class="form-group" onsubmit="return validate_form();">


		<div class="col-lg-6 m-auto">
			<br><br>
			<div class="card">
			<div class="card-header bg-dark">
          <h1 class="text-white text-center">Contact Us</h1>
        </div>
			<br>
			<label for="name"><h3>Full Name</h3></label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name" autocomplete="off" id="name">
			<span class="text-danger font-weight=bold" id="uname" ></span>
			<br>

			<label for="msgBody"><h3>Email</h3></label>
			<input type="text" name="msgBody" class="form-control" placeholder="Enter Subject" autocomplete="off" id="email"><br>
			<span class="text-danger font-weight=bold" id="usubject" ></span>

			<label for="textarea"><h3>Message</h3></label>
			<textarea class="form-control" name="textarea" placeholder="Enter Message" autocomplete="off" id="message"></textarea>
			<span class="text-danger font-weight=bold" id="umessage" ></span>
			<br>
			<input type="submit" name="submit" class="btn btn-primary form-control"><br>
			<input type="button" name="cancel" value="Cancel" class="btn btn-danger" onClick="location.href='index.php'">
		</div>
		</form>
	</div>

	<script type="text/javascript">
	function validate_form(){
		var name = document.getElementById('name').value;
		var email =	document.getElementById('email').value;
		var message = document.getElementById('message').value;

		isValid=true;

		document.getElementById('uname').innerHTML="";
		document.getElementById('uemail').innerHTML="";
		document.getElementById('umessage').innerHTML="";

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

			if(message.length<=2 || message.length>918){
				document.getElementById('umessage').innerHTML="**Message length must be between 2 and 1000";
				isValid=false;
			}

			if(message==""){
				document.getElementById('umessage').innerHTML="**Please fill this field";
				isValid=false;
			}

			

			
		return isValid;
	}
</script>

</body>
</html>





<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 

if (isset($_POST["submit"])){

    
    try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'mydkte.123@gmail.com';
	$mail->Password = 'Dkte@123';
	
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	//$mail->setFrom('asshelar@dktes.com', 'Alankar Shelar');		 
	//$mail->addAddress('alankarshelar5620@gmail.com'); 
	//$mail->addAddress('alankarshelar89@gmail.com', 'AS'); 
	
			//From email address and name

		//$studEmail=$_POST['email'];
		$mailAddr=$_POST['email'];
		$studName=$_POST['name'];
		//$studBody=$_POST['body'];
		//$studText=$_POST['textarea'];

		$mail->From = $mailAddr;
		$mail->FromName = $studName;

		//To address and name
	
						# code...
						
		$mail->addAddress("mydkte.123@gmail.com","$studName");
	
       // $mail->addAddress("sutarsohan1@gmail.com", "Sohan");
		//$mail->addAddress("alankarshelar89@gmail.com"); //Recipient name is optional

		//Address to which recipient will reply
		$mail->addReplyTo("$mailAddr","Reply");

		//CC and BCC
		//$mail->addCC("cc@example.com");
		//$mail->addBCC("bcc@example.com");
	
	  // $mail->addAttachment("img1.jpg","file.txt");
		$msgBody=$_POST['msgBody'];
		$msgText=$_POST['textarea'];
	
	$mail->isHTML(true);								 
	$mail->Subject = $msgBody; 
	$mail->Body = $msgText; 
	$mail->AltBody = 'From Contact us Page'; 
	$mail->send(); 
	
    echo "Mail has been sent successfully!"; 

   

} 
catch (Exception $e) 
{ 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}     
}



?>

<!--<script type="text/javascript">
	function validate_form(){
		valid=true;
		if(document.contactform.name.value=="" || document.contactform.msgBody.value==""|| document.contactform.email.value==""|| document.contactform.textarea.value==""){
			alert("Please fill out all the fields");
			valid=false;
		}
		return valid;
	}
</script>-->
