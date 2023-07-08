<?php
include 'connection.php';
if(!$conn)
{
    die("Connection Failed");
}
$uname=$_POST['Uname'];
$pass=$_POST['Npass'];

$sql="UPDATE `login data` SET `Password`='$pass' where `Username`='$uname'";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('Password Updated Successfully');window.location.href='index.php';</script>";
}
else{
    echo "<script>alert('Password Not Updated');window.location.href='index.php';</script>";
}
?>