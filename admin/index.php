<?php 
session_start();
include 'db.php';

?>
<head>
<title>EdinGrih admin login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="../assets/img/favicon.ico" rel="icon">
  <link href="../assets/img/android-chrome-512x512.png" rel="android-chrome-512x512">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="../assets/img/android-chrome-192x192.png" rel="android-chrome-192x192">
  <link href="../assets/img/favicon-16x16.png" rel="favicon-16x16">
  <link href="../assets/img/favicon-32x32.png" rel="favicon-32x32">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>



<div class="container bg-success p-5"style="background-image:url('admin\assets\images\bg-01.jpg');"> 
<div class="jumbotron text-center" >
  <div class="row">
    <div class="col-lg-6 col-sm-12">
    <div class="head col-lg-12 col-sm-12" style="text-align:center;">
    <a href="#">
                  <img class="rounded-circle" src="img-project/vector1.jpeg" style="height:150px; weidght: 50px;">
                  <h3>Admin Login</h3>
                </a>
     </div>
    </div>
    <div class="col-lg-6">
    <form method="post" action="#">
  <div class="form-group col-lg-12 col-sm-12">
    <input type="text" for="exampleInputEmail1" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
    
  </div>
  <div class="form-group col-lg-12 col-sm-12">
    <input type="password" for="exampleInputPassword1" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Login</button>
  <a href="../index.php" name="submit"class="btn btn-warning">Back</a>
</form>
</div>
   
    
</div>
</div>
</div>
<?php  
if(isset($_POST['submit']))
{
    $user=$_POST['email'];
    $pwd=$_POST['password'];


    $query="SELECT *FROM admin WHERE username='$user' AND password='$pwd'";
    $run=mysqli_query($conn,$query);

   if (mysqli_num_rows($run)>0)
   {
    while($row =mysqli_fetch_assoc($run))
    {
      
        $_SESSION['loginsuccesfull']=1;
        $_SESSION['username']=$user;
        echo "<script>alert('Logged in Successfully'); window.location.href='projectlist.php';</script>";
       
    }
   }
   else 
   {
    echo "<script>alert('Check Your id pwd -They not matched our Users');</script>";
   }
   }




?>

