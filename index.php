<?php


session_start();

include("connection.php");
if(isset($_POST['submit']))

{

     
      $email = $_POST['email'];
      $password = $_POST['password'];


      $sql = "SELECT * FROM details WHERE email = '$email' and password='$password'";
      $result=mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);



      if($num > 0 ){


            $_SESSION['name']= $row['name'];
            $_SESSION['email']= $row['email'];
            header("location:welcome.php");
      }

      else{

           echo'<script>alert("Email and  password is not matching")</script>';
      }

}


?>



<html>
<head>
    
    <title>login-page</title>
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>
<div class="main">
      <form action="" method="POST">
      <h1>LOGIN</h1>
      <input type="email" name="email" placeholder="Enter your Email"><br>
      <input type="password" name="password" placeholder="Enter your password"><br>
      <button type="submit" name="submit">LOGIN</button><br><br> dont Have an Account ?&nbsp;<a href="signup.php">signup here</a>
    </form>
    </div>
</body>
</html>