<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			
			<form name="searchform" method="post" class="form-group" onsubmit="return validate_form ( );">
				
				<div class="jumbotron">
					<div class="container col-lg-6">
						<h3>Search Alumni Here!</h3>
				<input list="field" name="field" class="form-control" autocomplete="off" placeholder="Select field to search" autocomplete="off">
  				<datalist id="field">
   				 	    <option value="Name">
					    <option value="Branch">
					    <option value="Yop">
					    <option value="Address">
  				</datalist>	<br>
  				<input type="text" name="searchval" class="form-control" placeholder="Enter key value" autocomplete="off"><br>
  				<input type="submit" name="submit" value="Search" class="btn btn-primary">
  				<input type="button" name="cancel" value="Cancel" class="btn btn-danger"  onClick="location.href='index.php'">
  				</div>
  				</div>
			</form>
			</div>



			<br><br>
			<h1 class="text-warning text-center">Our Alumni</h1>
			<br>
			
			
			
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<th>Profile</th>
					<th>Name</th>
					<th>Branch</th>
					<th>Passing Year</th>
					<th>Address</th>
					
				</tr>

				<?php
					include 'conn.php';
 					$q="select * from alumni2";  
					$query=mysqli_query($conn,$q);
					while ($res=mysqli_fetch_array($query)) {
						# code...
					 
				?>

				<tr class="text-center">
					<td><img src="<?php echo $res['image']; ?>" height="100px" width="100px"></td>
					<td><?php echo $res['name']; ?></td>
					<td><?php echo $res['branch']; ?></td>
					<td><?php echo $res['yop']; ?></td>
					<td><?php echo $res['address']; ?></td>
				
					
				</tr>
			
			<?php
				}
			?>

			</table>
			
		
	</div>


</body>
</html>

<?php
if(isset($_POST["submit"])){


$_SESSION['field']=$_POST['field'];
$_SESSION['searchval']=$_POST['searchval'];
	header("Location: search.php");
}
?>

<script type="text/javascript">
<!--

function validate_form ( )
{
    valid = true;

    if ( document.searchform.field.value == "" || document.searchform.searchval.value=="")
    {
        alert ( "Please fill out all fields to search" );
        valid = false;
    }

    return valid;
}

//-->
</script>