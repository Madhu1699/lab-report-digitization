<?php
// Start the session
session_start();
if(!isset($_SESSION["email"])){
    echo "<script>alert('Please Login again');</script>";
     //header("Location: index.php");
    echo "<script>location.href='Login.php'</script>";


}
?>
<html>
<head>
   
<title>Index</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   

</head>
<body>

<div class="container">

     <div class="jumbotron">
        <h1>Alumni Details</h1>
    </div>

   <form class="col-md-6" action="" method="post">
        
      <div class="form-group">
    <h1 class="display-5">Name</h1> 
         <h1 id="name" class=" form-control" style="font-weight: bold  "></h1> 
       </div>

        <div class="form-group">
    <h1 class="display-5">Branch</h1> 
         <h1 id="branch" class=" form-control" style="font-weight: bold"></label> 
       </div>

         <div class="form-group">
    <h1 class="display-5">Passing Year</h1> 
         <h1 class=" form-control" id="yop" style="font-weight: bold"></h1> 
       </div>

         <div class="form-group">
    <h1 class="display-5">Contact</h1> 
         <h1 class=" form-control" id="contact" style="font-weight: bold"></h1> 
       </div>

         <div class="form-group">
    <h1 class="display-5">Birth Date</h1> 
         <h1 class=" form-control" id="dob" style="font-weight: bold"></h1> 
       </div>

        <div class="form-group">
    <h1 class="display-5">City</h1> 
         <h1 class=" form-control" id="address" style="font-weight: bold"></h1> 
       </div>

         <div class="form-group">
    <h1 class="display-5">Email</h1> 
         <h1 class=" form-control" id="email" style="font-weight: bold"></h1> 
       </div>

         <input type=button onClick="location.href='update.php'" value='Update' class="btn btn-primary">
         <button class="btn btn-danger" name="logout" onClick="logout">Logout</button>
       




    </form>

    </div>
     <script type="text/javascript">

        document.getElementById("name").innerHTML="<?php echo $_SESSION["name"]?>";
        document.getElementById("branch").innerHTML="<?php echo $_SESSION["branch"]?>";
        document.getElementById("yop").innerHTML="<?php echo $_SESSION["yop"]?>";
        document.getElementById("contact").innerHTML="<?php echo $_SESSION["contact"]?>";
        document.getElementById("dob").innerHTML="<?php echo $_SESSION["dob"]?>";
        document.getElementById("address").innerHTML="<?php echo $_SESSION["address"]?>";
        document.getElementById("email").innerHTML="<?php echo $_SESSION["email"]?>";
        

        document.getElementByClassName("form-control").style.color="red";
   
            
        
            
    </script>
    </body>
    
     <?php
    if(isset($_POST["logout"])){
        unset($_SESSION['name']);
         unset($_SESSION['password']);
         session_destroy();
         header('Location: Login.php');

        
    }
 
    
     ?>
      <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script> 
    
    
</html>