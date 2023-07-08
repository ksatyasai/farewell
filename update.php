<?php
session_start();
if(isset($_SESSION['username'])){
include 'connection.php';
if(!$conn){
    die("Connection Failed Please Try Again Later");
}
$Uname=$_POST['pin'];
$amount=$_POST['amount'];
$username=$_SESSION['username'];
$sql="UPDATE `student data` SET `Amount`=`Amount`+'$amount' where `CR Name`='$username' AND `Pin Number`='$Uname'";
$sqli="SELECT * FROM `student data` WHERE `CR Name`='$username' AND `Pin Number`='$Uname'";
$result=mysqli_query($conn,$sqli);
if(mysqli_num_rows($result)>0) 
 {
	if(mysqli_query($conn,$sql))
	 {
      echo "<script>alert('Data Updated Successfully');window.location.href='datalist.php';</script>";
     }
 }
else
 {
   echo "<script>alert('You Cannot Update Other CR Student Details (or) please check again pin number');window.location.href='data.php';</script>";
 }
}
else{
    echo "<script>alert('Login Was Not Completed');window.location.href='index.php'</script>";
}
?>