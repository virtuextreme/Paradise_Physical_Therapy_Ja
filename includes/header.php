<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/Team-Boxed.css">
    <title>Paradise Physical Therapy</title>
  </head>
 <body style="background:linear-gradient(rgba(23, 90, 217, 0.9), rgba(47, 23, 15, 0.65)), url('img/2206.jpg');">
    <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="btn btn-info action-button" role="button" href="index.php">Home</a><span class="sr-only">(current)</span></a>
            <a class="btn btn-info action-button" role="button" href="aboutus.php">About Us</a>
            <a class="btn btn-info action-button" role="button" href="ourteam.php">Team</a>
            <a class="btn btn-info action-button" role="button" href="compression.php">Products</a>
            <a class="btn btn-info action-button" role="button" href="services.php">Services</a>
            <a class="btn btn-info action-button" role="button" href="viewrecords.php">Records</a>
        </div>
        <div class="navbar-nav ml-auto">
        <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="btn btn-secondary action-button" role="button" href="Login.php"><font color="white">Login</font></a>
            <a class="btn btn-light action-button" role="button" href="Registration.php">Register</a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span><p class = font-weight-bold><font color="white">Hello</font> </p>  <p class = font-weight-bold><font color="white">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['username'] ?>!</font></p> </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php"><p class = font-weight-bold>  <font color="white">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Logout</font> </p><span class="sr-only">(current)</span></a>
          <?php } ?>
      </nav>
      <br/>

      