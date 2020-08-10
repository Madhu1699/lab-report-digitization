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
</head>
<style>
  .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color: white;
  color: black;
  text-align: center;
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
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload Reports</a>
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


<?php
$name=$_SESSION['name'];         
?>
 <div class="container">
  	<div class="row">
  		<div class="col-lg-12">
  			<div id=content>
  			 <h1 style="font-family:Cambria">Welcome</h1>
         <h1 style="font-family:Cambria;color: yellow"><?php echo $name ?></h1>
         <h2 style="font-family:Cambria"> to Lab Report Digitalization </h2> 
        </div>
  		</div>
  	</div>
  </div>
<div class="footer">
    <p>© All right Reversed.
        Developed by Team Nova</p>
    </div>

</body>
</html>
