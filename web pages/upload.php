<?php
//include Project/Login.php;
session_start();
if($_SESSION['id']<1)
{

 header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab Report Digitization</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="upload-css.css">
</head>
<style type="text/css">
	iframe{
		border-style: none;
		border-width: 0px;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
  <a class="navbar-brand" href="https://en.wikipedia.org/wiki/Digitization">Report Digitization</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only"></span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="upload.php" >Upload Reports <span class="sr-only">(current)</span></a>
      </li> 

       <li class="nav-item">
        <a class="nav-link" href="status.php" >Check Status <span class="sr-only"></span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">About us</a>
      </li>

    </ul>
   
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class="fa fa-user"></i> LOGOUT</a>
    </li>
    
  </ul>
</div>
  </div>
  
</nav>

<div class="upload-main">
 <div class="container">
  	<div class="row">
  		<div class="col-lg-12">
  			<div id=content>
  			 <h1 style="font-family:Cambria">Upload your reports here!</h1>
  			 <h3 style="color:yellow">**Note**</h3>
  			 	<ul style="color: black">
  			 		<ul>Upload the correct document</ul>
  			 		<ul>Select correct file formats(.jpg,.jpeg)</ul>
  			 		<ul>Lab reports should be issued from our TRUSTED Labs</ul>
  			 		
  			 	</ul>
  			 	<div class="fieldset">
  			 	<iframe src="http://127.0.0.1:5000/" width="300" height="300"></iframe>	
  			 	</div> 
        		 
        </div>
  		</div>
  	</div>
  </div>
</div>

</body>
</html>
