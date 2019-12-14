<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'; ?>
<!DOCTYPE html>
<htlm>
    <!--
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/site.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
     <link rel="stylesheet" href="/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/Team-Boxed.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="css/Simple-Slider.css">
    <title>Paradise Physical Therapy</title>
  </head>
<body style="background:linear-gradient(rgba(23, 90, 217, 0.9), rgba(47, 23, 15, 0.65)), url('img/2206.jpg');">
    <h1 class="text-center text-white site-heading"></h1>
    <div class="team-boxed"></div>
    <div>
        <div class="header-blue">
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
     <a class="navbar-brand" href="index.php"><p class = font-weight-bold><font color="white"><font color="white">Paradise Physical Therapy</font></p></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="btn btn-info action-button" role="button" href="index.php">Home</a><span class="sr-only">(current)</span>
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
            <a class="btn btn-secondary action-button" role="button" href="Login.php">Login</a>
            <a class="btn btn-light action-button" role="button" href="Registration.php">Register</a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span><p class = font-weight-bold><font color="white">Hello</font> </p>  <p class = font-weight-bold><font color="white"><?php echo $_SESSION['username'] ?>!</font></p> </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php"><p class = font-weight-bold>  <font color="white">Logout</font> </p><span class="sr-only">(current)</span></a>
          <?php } ?>
            </nav>
         
       
    </div>
  
<br>
            <section>
                <div class="hero container">
                <div class="container">
            <div class="carousel slide" data-ride="carousel" data-keyboard="false" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="img/PARADISE.png" alt="Paradise Physical Therapy"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="img/Ortho.png" alt="Orthopedic"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="img/Rehab.png" alt="Rehabilitaion Center"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="img/Ped.png" alt="Pediatrics"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><SPAN></SPAN><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            
            </ol>
    </div>
                    </div>    </div></div></section>
      <section class="page-section clearfix">
        <div class="container">
            <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="img/intro.jpg">
                <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                    <h2 class="section-heading mb-4"><span class="section-heading-upper"><font color="blue">RELAXING</font></span><span class="section-heading-lower"><font color="blue">TREATMENT</blue></span></h2>
                    <p class="mb-3"><b>Paradise Physical Therapy</b> Jamaica is one of Spanish Town providers of outpatient physical and occupational therapy services, 
    dedicated to helping patients of all ages live better, work smarter and play harder.® </p>
                    <div class="mx-auto intro-button"><a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" href="Registration.php">Visit Us Today!</a></div>
                </div>
            </div>
        </div>
    </section>
                    <section>
                    <div class="container hero">

                    <div
                        class="container">
                        <div class="intro"><img class="img-fluid" src="img/Stages.jpg">
                            <div class="screen"></div>
                        </div>
                </div>
                        </div>
                    </section>
                    
                    
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4"><span class="section-heading-upper">Our Promise</span><span class="section-heading-lower">To You</span></h2>
                        <p class="mb-0"><b>Paradise Physical Therapy</b> Jamaica is your helping hand and guiding voice that helps you to keep moving at the speed of your life.</p>
                    </div>
                </div>
            </div>
        </div>
        
        

    </section>
   
<?php require_once 'includes/footer.php'; ?>

</html>