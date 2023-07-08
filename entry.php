<?php
session_start();
if(isset($_SESSION['username'])){
include 'connection.php';
if(!$conn)
{
    die("Connection Failed");
}
$pin=$_POST['pin'];
$Uname=$_POST['uname'];
$amount=$_POST['amount'];
$cr=$_SESSION['username'];
$sql="INSERT INTO `student data`(`Name Of The Student`, `Amount`, `Pin Number`,`CR Name`) VALUES ('$Uname','$amount','$pin','$cr')";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('Data Entered Successfully');window.location.href='datalist.php';</script>";
}
else{
    echo "<script>alert('Data Not Entered');window.location.href='data.php';</script>";
}}
else{
    echo "<script>alert('Login Was Not Completed');window.location.href='index.php'</script>";
}
?>