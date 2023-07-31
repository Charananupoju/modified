<?php  
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['full_name'];  
    $phone=$_POST['phone']; 
    $email=$_POST['email']; 
    $pass=$_POST['pass'];   
    $gender=$_POST['gender']; 
    //connecting to the data base
    $servername="127.0.0.1"; 
   $username="root"; 
   $password=""; 
   $database="test";  
   //creating a connection
    $conn=mysqli_connect($servername,$username,$password,$database);  
if(!$conn)
{
   echo "Connection failed: ".mysqli_connect_eror(); 
} 
else{
    $sql="INSERT INTO `register` ( `name`, `number`, `email`, `pass`, `gender`) VALUES ('$name', '$phone', '$email', '$pass', '$gender')";
    $result=mysqli_query($conn,$sql); 
    if($result)
    {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!!!</strong>Regestration successfull 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    } 
    else{
       echo "the data not submitted: ".mysqli_error($conn); 
    }
} 
} 
?>  