<?php 
session_start();
 if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
 {$admin = 1;}
 else if(isset($_SESSION['is_worker']) && $_SESSION['is_worker'])
 {$admin = 0;}
 else
 {
  header("Location: login.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Children's Aid Society- in assiciation with Atharva Foundation</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" id="logo" href="#page-top"><img src="./img/cas-mumbai-logo-icon.jpg"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Actions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Missing Children</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold"><img src="logo.jpg"></h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Your one step can change the life of a child!</p>
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <?php
    if($admin)
    {
          echo "<section class='page-section bg-primary' id='about'>
        <div class='container'>
          <div class='row justify-content-center'>
            <div class='col-lg-8 text-center'>
              <h2 class='text-white mt-0'>We've got what you need!</h2>
              <hr class='divider light my-4'>
              <p class='text-white mb-4'>Submit the details of a child that you see is unattended or in danger and we will take care of the rest</p>
            </div>
          </div>
        </div>
        <div class='row' style='text-align:center;margin:auto;'>
        <div class='col-lg-4'>
          <a class='btn btn-light btn-xl js-scroll-trigger mb-2' href='data_form.php'>
            Inform about a child
          </a>
        </div>
        <div class='col-lg-4'>
            <a class='btn btn-light btn-xl js-scroll-trigger mb-2' href='retrive_data.php'>
              Registered Children
            </a>
        </div>
        <div class='col-lg-4'>
            <a class='btn btn-light btn-xl js-scroll-trigger mb-2' href='minimal_data.php'>
              Unattended Children
            </a>
        </div>
        </div>
      </section>";
    }
    if(!$admin)
    {
      echo "<section class='page-section bg-primary' id='about'>
    <div class='container'>
      <div class='row justify-content-center'>
        <div class='col-lg-8 text-center'>
          <h2 class='text-white mt-0'>We've got what you need!</h2>
          <hr class='divider light my-4'>
          <p class='text-white mb-4'>Submit the details of a child that you see is unattended or in danger and we will take care of the rest</p>
        </div>
      </div>
    </div>
    <div class='row' style='text-align:center;margin:auto;'>
    <div class='col-lg-6'>
      <a class='btn btn-light btn-xl js-scroll-trigger mb-2' href='retrive_data.php'>
        Registered Children
      </a>
    </div>
    <div class='col-lg-6'>
            <a class='btn btn-light btn-xl js-scroll-trigger mb-2' href='minimal_data.php'>
              Unattended Children
            </a>
        </div>
    </div>
  </section>";
    }
  ?>
  <section>
    <div id="portfolio" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/1.jpg" alt="First slide" style="max-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/2.jpg" alt="Second slide" style="max-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/3.jpg" alt="Third slide" style="max-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/4.jpg" alt="Third slide" style="max-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/5.jpg" alt="Third slide" style="max-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/6.jpg" alt="Third slide" style="max-height: 500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Register a Child</h3>
            <p class="text-muted mb-0">Our goal is to give a good life to the children found on streets, add them and help the authorities do a greater good. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Up to Date</h3>
            <p class="text-muted mb-0">This site maintains a centralised data base that helps in finding the child faster and effectively</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Children's Aid Society</h3>
            <p class="text-muted mb-0">This data will be given to the Children's Aid society that tirelessly works towards the betterment of children</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">To help the innocent souls lead a nice life</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <!-- <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section> -->
  

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>
  <script type="text/javascript">
    $('#portfolio').carousel({
      interval:1000
    });
  </script>
</body>

</html>
