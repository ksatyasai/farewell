<?php 
 include 'connection.php';
 if(!$conn){
    die("Connection Failed Please Try Again Later");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
      }
      .container {
        position: relative;
        top:30%;
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
       
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
      label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }
      select,
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
      .btn {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #00bfff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
      }
      .btn:hover {
        background-color: #0080ff;
      }
      .footer {
        text-align: center;
        margin-top: 20px;
      }
      .footer a {
        color: #00bfff;
        text-decoration: none;
      }
      .footer a:hover {
        text-decoration: underline;
      }
     
      @media screen and (max-width: 576px) {
        .container {
            margin-top:30%;
          max-width: 100%;
          padding: 10px;
        }
        h1 {
          font-size: 24px;
        }
        select,
        input[type="password"] {
          font-size: 14px;
        }
        .btn {
          font-size: 14px;
          padding: 8px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form class="form" method="post" action="logging.php">
        <label for="username">Username</label>
        <select class="form-control" id="username" name="username" placeholder="Enter your username" required>
            <option value="" disable>Choose....</option>
            <option value="20255-CM-018">20255-CM-018</option>
            <option value="20255-CM-034">20255-CM-034</option>
            <option value="20255-CM-029">20255-CM-029</option>
            <option value="20255-CM-060">20255-CM-060</option>
            <option value="20255-CM-028">20255-CM-028</option>
            <option value="20255-CM-001">20255-CM-001</option>
        </select>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />

        <button type="submit" name="submit" class="btn">Login</button>
      </form>
      <div class="footer">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Generate Your Once Time Password</a> 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Your Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form" method="post" action="passwordupdate.php">
        <label for="username">Username</label>
        <select class="form-control" name="Uname" placeholder="Enter your username" required>
            <option value="" disable>Choose....</option>
            <option value="20255-CM-018">20255-CM-018</option>
            <option value="20255-CM-034">20255-CM-034</option>
            <option value="20255-CM-029">20255-CM-029</option>
            <option value="20255-CM-060">20255-CM-060</option>
            <option value="20255-CM-028">20255-CM-028</option>
            <option value="20255-CM-001">20255-CM-001</option>
        </select>
        <label for="password">New Password</label>
        <input type="password" name="Npass" placeholder="Enter your password" required />
        <button type="submit" name="update" class="btn btn-primary">SUBMIT</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
    
    
   