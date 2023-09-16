<?php


include("connection.php");
if(isset($_POST['submit'])){

      $name =$_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];


      $sql = "SELECT * FROM details WHERE email ='$email'";
      $result=mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);



      if($num > 0){

            echo'<script>alert("Email Already Existed")<\script>';
      }

      else{


            $insert= "INSERT INTO details(name,email,password)VALUES('$name','$email','$password')";
            mysqli_query($conn,$insert);
           
            header("location:index.php");
      }

}


?>
<html>
<head>
    <title>signup page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
      <form action="" method="POST">
      <h1>SIGNUP</h1>
      <input type="name" name="name" placeholder="Enter your name"><br>
      <input type="email" name="email" placeholder="Enter your Email"><br>
      <input type="password" name="password" placeholder="Enter your password" ><br>
      <button type="submit" name="submit">SIGNUP</button><br><br>Have an Account ?&nbsp;<a href="index.php">login here</a>
    </form>
    </div>
</body>
</html>