<?
session_start();
if(isset($_SESSION['username'])){
include 'connection.php';
if(!$conn){
    die("Connection Failed Please Try Again Later");
}
$Uname=$_POST['pin'];
$amount=$_POST['amount'];
print_r($_POST);
// $sql="UPDATE `student data` SET `Amount`=`Amount`+'$amount' where `Pin Number`='$Uname'";
// if(mysqli_query($conn,$sql))
// {
//     echo "<script>alert('Data Updated Successfully');window.location.href='datalist.php';</script>";
// }
// else{
//     echo "<script>alert('Data Not Updated');window.location.href='data.php';</script>";
// }
}
else{
    echo "<script>alert('Login Was Not Completed');window.location.href='index.php'</script>";
}
?>