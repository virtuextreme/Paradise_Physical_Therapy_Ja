<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Paradise Physical Therapy - <?php echo $title?></title>
  </head>
  <body>
    <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="index.php"><p class = font-weight-bold>Paradise Physical Therapy</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php"><p class = font-weight-bold>Home </p><span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="ourteam.php"><p class = font-weight-bold>Our Team</p></a>
          <a class="nav-item nav-link" href="compression.php"><p class = font-weight-bold>Compression Stocking</p></a>
          <a class="nav-item nav-link" href="services.php"><p class = font-weight-bold>Services</p></a>
          <a class="nav-item nav-link" href="aboutus.php"><p class = font-weight-bold>About Us</p></a>
          <a class="nav-item nav-link" href="viewrecords.php"><p class = font-weight-bold>View Patient's Record</p></a>
        </div>
        <div class="navbar-nav ml-auto">
        <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php"><p class = font-weight-bold>Login</p> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="Registration.php"><p class = font-weight-bold>Register</p> <span class="sr-only">(current)</span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span><p class = font-weight-bold>Hello </p>  <p class = font-weight-bold><?php echo $_SESSION['username'] ?>!</p> </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php"><p class = font-weight-bold>  Logout </p><span class="sr-only">(current)</span></a>
          <?php } ?>
      </nav>
      <br/>

      