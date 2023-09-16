<?php

session_start();
include("connection.php");
$sql="SELECT * FROM details WHERE email='{$_SESSION['email']}'";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);



if(isset($_POST['edit']))
 
{



    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="UPDATE `details` SET `name`='$name',`email`='$email',`password`='$password' WHERE email ='{$_SESSION['email']}'";
    $result=mysqli_query($conn,$sql);

     if($result)
     
     {


         echo'<script> alert("Successfully Updated")</script>';
}




}

?>
<html>
<title>profile</title>
<link rel="stylesheet" href="profile.css">

<body>
    
<div class="profile">
    <h1>PROFILE</h1>


           <form action="" method="POST" name="form">

         
           
           <label for="">USERNAME :</label><br>
           <input type="name" name="name" value="<?php echo $row['name']; ?>"><br>
           <label for="">EMAIL :</label><br>
          <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
           <label for="">PASSWORD :</label><br>
           <input type="password" name="password" value="<?php echo $row['password']; ?>"><br>
          <button type="submit" name="edit">EDIT</button><br>
      </form>
      </div>
</body>
</html>