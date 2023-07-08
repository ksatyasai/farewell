<?php
include 'connection.php';
if(!$conn){
    die("Connection Failed Please Try Again Later");
}
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CME FAREWELL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<style>
    body{
        background:linear-gradient(135deg,#0f04d3,#4d3e3f,#e4e4e4,#ff444f,green);
        background-size:cover;
        background-repeat:no-repeat;
        overflow-y:hidden;
        height:100vh;
    }
    .main{
            margin-top:50px; 
    }
    .container{
        display:flex;
        justify-content:center;
        max-width:600px;
        border-radius:30px;
        padding:20px 0;
        box-shadow:2px 2px 2px coral;
        }
    .items{
        display:flex;
        flex-direction:column;
    }
    .items button{
        margin:10px 0;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 3px;
        background-color: #f1f1f1;
        font-size: 16px;
      }
      input[type="text"]:focus,
      input[type="password"]:focus {
        background-color: #e0e0e0;
      }
      .btn,.btn1{
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;       
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
      }
      .logout{
        width: 100px;
       margin:10px 0 0 10px;
       display:flex;
       justify-content:flex-end;
      }
.text-white{
        animation-name:glow;
        animation-duration: 4s;
        animation-iteration-count: infinite;
      }
      @keyframes glow{
        0%{text-shadow:2px 2px 3px red;}
        20%{text-shadow:2px 2px 3px  green;}
        40%{text-shadow:2px 2px 3px  coral;}
        60%{text-shadow:2px 2px 3px  blue;}
        80%{text-shadow:2px 2px 3px  lightblue;}
        100%{text-shadow:2px 2px 10px  black;}
      }
    .note{
        font-size:12px;
    }
</style>
</head>
<body class="bg-light">
     <div class="logout" style="">
        <button class="btn btn1 btn-danger" onclick="window.location.href='logout.php'">Log out</button>
    </div>
    <div class="main">
<h1 class="text-center text-white">CME FAREWELL DETAILS</h1>   
    <div class="container bg-dark">

        <div class="items">
            <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Enter Student Details</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">FILL STUDENT DATA</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form" method="post" action="entry.php" id="frm">
                                    <span class="note">NOTE:- PLEASE ENTER PIN IN THIS FORMAT 20255CM000</span><hr>
                                    <label for="username">Pin Number</label>
                                    <input type="text" name="pin" onkeypress="return((event.charCode>64 &&event.charCode<91)|| (event.charCode>96 && event.charCode<123) || event.charCode==8 || event.charCode==32 || (event.charCode>=48 && event.charCode<=57))" style="text-transform:uppercase;" required>
                                    <label for="username">Username</label>
                                    <input type="text" name="uname" style="text-transform:uppercase;" required>
                                    <label for="password">Enter Amount</label>
                                    <input type="number" name="amount" class="form-control" required />
                                    <button type="reset" class="btn btn-primary">RESET</button>
                                    <button type="submit" name="submit" class="btn btn-danger">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            <button class="btn btn-secondary" onclick="window.location.href='viewdatalist.php'" >View Overall Payments</button>
            <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#UpdateModal">Update Student Payment Details</button>
            <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">UPDATE STUDENT DATA</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form"  action="update.php" method="post">
                                    <span class="note">NOTE:- PLEASE ENTER PIN IN THIS FORMAT 20255CM000</span><hr>
                                    <label >Pin Number</label>
                                    <input type="text" name="pin" onkeypress="return((event.charCode>64 &&event.charCode<91)|| (event.charCode>96 && event.charCode<123) || event.charCode==8 || event.charCode==32 || (event.charCode>=48 && event.charCode<=57))" style="text-transform:uppercase;" required>
                                    <label >Enter Amount</label>
                                    <input type="text" name="amount" required />
                                    <button type="reset" class="btn btn-primary">RESET</button>
                                    <button type="submit" name="submit" class="btn btn-danger">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            <button class="btn btn-light" onclick="window.location.href='datalist.php'">Check Your Payments</button>
            <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#Delete">Delete Student Details</button>
            <div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE STUDENT DATA</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form" method="post" action="Delete.php">
                                    <span class="note">NOTE:- PLEASE ENTER PIN IN THIS FORMAT 20255CM000</span><hr>
                                    <label for="username">Pin Number</label>
                                    <input type="text" name="pin" onkeypress="return((event.charCode>64 &&event.charCode<91)|| (event.charCode>96 && event.charCode<123) || event.charCode==8 || event.charCode==32 || (event.charCode>=48 && event.charCode<=57))" style="text-transform:uppercase;" required>
                                    <button type="reset" class="btn btn-primary">RESET</button>
                                    <button type="submit" name="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
        </div>
    </div>
   
    </div>
</body>
</html>
<?php
}
else{
    echo "<script>alert('Invalid Username & Password');window.location.href='index.php';</script>";
}?>