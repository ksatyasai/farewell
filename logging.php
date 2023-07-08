<?php
include 'connection.php';
 if(!$conn){
    die("Connection Failed Please Try Again Later");
}
session_start();
   if(isset($_POST['submit']))
   {
       $uname=$_POST['username'];
       $pass=$_POST['password'];
       $sql="select * from `login Data` where `Username`='$uname'";
       $result=mysqli_query($conn,$sql);
       foreach($result as $row)
     {
           if($row['Password'] == $pass)
           {
               $_SESSION['username']=$row['Name'];
               echo "<script>window.location.href='data.php';</script>";
           }
           else{
               echo "<script>alert('Your Password Is Not Match with Username...Try Again');</script>";
               echo "<script>window.location.href='index.php';</script>";
           }
      }
   }
   ?>