<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Doze Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body></body>

<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/coffe_shop/index.php" ? "active" : "" ?>">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/coffe_shop/about.php" ? "active" : "" ?>">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/coffe_shop/coffees.php" ? "active" : "" ?>">
                        <a class="nav-link" href="coffees.php">Coffees</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                     </li> -->
                     <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/coffe_shop/blog.php" ? "active" : "" ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                     </li>
                     <li class="nav-item <?= $_SERVER['REQUEST_URI'] == "/coffe_shop/contact.php" ? "active" : "" ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="#"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">coffee</h1>
                                 <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">coffee</h1>
                                 <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">coffee</h1>
                                 <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->