<?php
session_start();
    if(isset($_SESSION['username']) and isset($_SESSION['password']))
      {
        header('Location:home.php');
      }
      else
?> 

<!DOCTYPE html>
<html lang="en">
<head>


 </script>

 <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      background-image: url("7.jpg");
  }

  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 5px;      
      font-size: 30px;
      color: #111;
      font: sans-serif;
  }

  .container {
      padding: 100px 120px;
  }



 .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }

  .nav-tabs li a {
      color: #777;
  } 

  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px ;
      letter-spacing: 4px;
      opacity: 0.75;
  }

  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 ;
  }

  .navbar-nav li a:hover {
      color: #fff ;
  }

  .navbar-nav li.active a {
      color: #fff ;
      background-color: #29292c ;
  }

  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 ;
  }

  .dropdown-menu li a {
      color: #000 ;
  }

  .dropdown-menu li a:hover {
      background-color: gray ;
  }


  </style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="home.php">Online Engineering Aide</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Books
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Electrical Engineering</a></li>
          <li><a href="#">Computer Science</a></li>
          <li><a href="#">Mechanical Engineering</a></li>
          <li><a href="#">Civil Engineering</a></li>
          <li><a href="#">Basic Engineering</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Magazines
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Research</a></li>
          <li><a href="#">Inventions</a></li>
          <li><a href="#">Seminars & all</a></li>
        </ul>
      </li>
      <li><a href="#">Journals</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>



<div class="container">
 <div class="fix content_middle">
 <div class="fix login_form">

  <div class="page-header">
  <h1>Log-in Section</h1>      
  <p>Log-in to your account for the promised facilities.</p>
</div>
 <form method="post" action="login_process.php" >
 <div >
 <label class="control-label col-sm-2" for="usr">username:</label>
 <div class="col-sm-8">
 <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"/>
 </div>
 </div>
 <br /> <br />

 <div >
  <label class="control-label col-sm-2" for="pwd">password:</label>
    <div class="col-sm-8">          
      <input type="password" name="password"class="form-control" id="pwd" placeholder="Enter password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
    </div>
 </div>
 <br /> <br />


 <div >        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label for="remember"><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['username'])){echo "checked='checked'"; }?>value="1" > Remember me</label>
        </div>
      </div>
    </div>
 <div class="col-sm-offset-2 col-sm-10">
 <button type="submit" class="btn btn-default" name="submit">Submit</button>
 <div/>

 <div class="page-header">
  <p style="color:#333333;font-size:30px;">Doesn't have an account yet ?</p>      
  <a href="signup.php" class="btn btn-info" role="button">Sign-up now</a>
 </form>
 </div>
 </div>
</div>
 
</body>
</html>

<?php

if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
  $username = $_COOKIE['username'];
  $password = $_COOKIE['password'];

  echo "<script>
      document.getElementById('username').value = '$username';
      document.getElementById('password').value = '$password';

  </script>";
}

?>


