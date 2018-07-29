<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
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
      color: #777;
  }

  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 30px;
      color: #111;
  }

  .container {
      padding: 80px 120px;
  }

  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }

  .person:hover {
      border-color: #f1f1f1;
  }

  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(10%);
      width: 100%;
      margin: auto;
  }

  .carousel-caption h2, p {
      color: #2F4F4F ;
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
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Books
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="electrical.php">Electrical Engineering</a></li>
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
      <?php
      if(isset($_SESSION['username']) and isset($_SESSION['password'])){

      /*if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
        {*/
        ?>
        <li>
        <a href="logout.php">
         <span class="glyphicon glyphicon-log-in" ></span> logout
         </a>
        </li>
        <?php 
    }
      else{
      ?>
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li>
      <a  href="login.php">
         <span class="glyphicon glyphicon-log-in" ></span> login
         </a>
        </li>
        <?php 
          
        }
        ?>
    </ul>
  </div>
</nav>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg"  width="1200" height="700">
        <div class="carousel-caption">
          <h2>Mathematics</h2>
          <p> The core of Engineering study.</p>
        </div>      
      </div>

      <div class="item">
        <img src="2.jpg"  width="1200" height="700">
        <div class="carousel-caption">
          <h2>Architecture</h2>
          <p>Structural base of engineering</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="3.jpg"  width="1200" height="700">
        <div class="carousel-caption">
          <h2>Design</h2>
          <p>Designing and implementation is a must</p>
        </div>      
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>




<div id="overview" class="container text-center">
  <h3>Books are available !</h3>
  <p><em>soft copies for necessary engineering books and magazines</em></p>
  <p>We have created an engineering aide website for students to enrich and enlarge the horizon of their knowledge. Necessary books, magazines and journals are provided in this website for gaining knowledge about academic courses and latest scientific and technological inventions throughout the world.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="4.jpg" target="_blank">
          <img src="4.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Ever wished you could learn C from a book? Head First C provides a complete learning experience for C and structured imperative programming.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="5.jpg" target="_blank">
          <img src="5.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>A Brief History of Time is the story of the ultimate quest for knowledge: the ongoing search for the tantalizing secrets at the heart of time and space.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="6.jpg" target="_blank">
          <img src="6.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>NUTM computer uses DNA processors and can self-replicate by Mark Tyson on 7 March 2017</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


</body>
</html>
