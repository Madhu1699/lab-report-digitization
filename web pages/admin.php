<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Lab Report Digitization</title>
<!--	<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin-css.css">
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
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload Reports</a>
      </li> 
      <li class="nav-item active">
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


 <div class="container">
  	<div class="row">
  		<div class="col-lg-12">
          <h1><center>Dashboard</center></h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>//jQuery Plugin
<?php 

?>


  			<?php

class DBphp extends SQLite3

{

function __construct()

{

$this->open('C:\sqlite3\Lab_Reports.db');

}

}

$db = new DBphp();

$query1="SELECT * FROM CITY_PATHOLOGY_LAB_FEVER_PANEL;";

$result=$db->query($query1);
echo "<center>";
echo "<table border='5'><tr>";
echo "<th>Patient_Name\t<th>Hemoglobin\t<th>PCV\t<th>RBC\t<th>MCV\t<th>MCH\t<th> MCHC \t<th>RDW\t<th>TLC\t<th>Platelet_Count\t<th>Username\t<th>Accepted\t<th>Rejected\t<th>Submit\n";

while($row= $result->fetchArray()){
echo "<tr><td>";
echo $row['Patient_Name'] ."\t<td>".

$row['Hemoglobin'] ."\t<td>".

$row['PCV']. "\t<td>".

$row['RBC']."\t<td>".

$row['MCV']. "\t<td>".

$row['MCH']. "\t<td>".

$row['MCHC']. "\t<td>".

$row['RDW']. "\t<td>".

$row['TLC']. "\t<td>";

echo $row['Platelet_Count']. "\t<td>";
echo $row['username']. "\t<td>";
echo $un=$row['username'];
echo "<form method='POST' action=''>";
echo "<input type='radio' name='status' value='Accepted'>\t<td>";

echo "<input type='radio' name='status' value='Rejected'>\t<td>";

echo "</form>Submit\t</tr>";

if(!empty($_GET['status'])){ $selected = $_GET['status'];}
else{ $selected = 'rejected';}
 echo "<span class='r-text'><?php echo $selected;?></span>";
 echo "<script>";
    echo "$('input[type=radio]').click(function(e) {";//jQuery works on clicking radio box
     echo "var value = $(this).val();"; //Get the clicked checkbox value
       echo "$('.r-text').html(value)";
    echo "});";
echo "</script>";


}


$db->close();

?>



</form>        
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

</body>
</html>
