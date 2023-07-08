<?php
session_start();
if(isset($_SESSION['username'])){
include 'connection.php';
if(!$conn)
{
    die("Connection Failed");
}
$pin=$_POST['pin'];
$username=$_SESSION['username'];
$sql="DELETE FROM `student data` WHERE `CR Name`='$username' AND `Pin Number`='$pin'";
$sqli="SELECT * FROM `student data` WHERE `CR Name`='$username' AND `Pin Number`='$pin'";
$result=mysqli_query($conn,$sqli);
if (mysqli_num_rows($result)>0)
 {
   if(mysqli_query($conn,$sql))
 	  {
       echo "<script>alert('Data Deleted Successfully');window.location.href='datalist.php';</script>";
      }
}
else
 {
  echo "<script>alert('You Cannot Delete Other CR Student Details (or) please check again pin number');window.location.href='data.php';</script>";
 }
}
else{
    echo "<script>alert('Login Was Not Completed');window.location.href='index.php'</script>";
}
?>