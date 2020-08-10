<?php
session_start();
$_SESSION['id']=0;
?>
<html>
<head>
<title>Log In Page</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

</head>
<body>
  <div class="container"> 
   <div class="col-lg-6 m-auto">
    <form name="loginform" class="form-group" method="post" enctype="multipart/form-data" onsubmit="return valid_form();">
      <br><br><div class="shadow">
        <div class="card border">
        <div class="card-header"style="background-color: #2897B1;">
          <h1 class="text-white text-center">Login Here!</h1>
        </div><br>
        <div style="width: 80%; margin-left: 50px;">
  <div class="form-group">
    <label for="email"><h3>Email address</h3></label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="on">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password"><h3>Password</h3></label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
 <br>
  <center><button type="submit" class="btn btn-primary" name="submit" style="width: 70%;">Submit</button></center>
  <br>
  <center><input type="button" name="cancel" value="Cancel" class="btn btn-danger" onClick="location.href='index.php'" style="width: 70%;"></center>
       
       <div class="form-group">
   
           <center><a href="signup.php">new user? Sign up here</a></center>
       </div>
     </div>
    </div>
 </div>
</form>
</div>
</div>
</body>
    
    
<?php

    if(isset($_POST["submit"])){
        
    //$conn=mysqli_connect("localhost","root","","dkte");
    include 'conn.php';
    if($conn){
       // echo "Success";
        $email=$_POST["email"];
        $password=$_POST["password"];
        
        $query="select * from report where email='$email' and password='$password'";
        $res=mysqli_query($conn,$query);
        
        if(mysqli_num_rows($res)>0){
            $row=mysqli_fetch_assoc($res);
            
            echo $row["name"];
            echo $row["password"];
            // Set session variables
           $_SESSION['name']=$row['name'];
           $_SESSION['blood']=$row['blood'];
           $_SESSION['phone']=$row['phone'];
           $_SESSION['dob']=$row['dob'];
           $_SESSION['city']=$row['city'];
           $_SESSION['email']=$row['email'];
           $_SESSION['password']=$row['password'];
           $_SESSION['id']=1;
            //shell_exec('C:\Users\Lenovo\Desktop\project Demo\sarang_project\Mini_Project\app.py');
             header('location:./dashboard.php');
        }
        else{
           // echo "No data found";
            echo "<script>alert('No data found')</script>";
        }
        
        }
        else{
            echo "Connection failed";
        }
    }
    else
        //echo "EHUEUE";
?>
</html>

<script type="text/javascript">
  function valid_form(){
    valid=true;
    if(document.loginform.email.value=="" || document.loginform.password.value==""){
      alert("Please fill out all the fields");
    }
  }
</script>