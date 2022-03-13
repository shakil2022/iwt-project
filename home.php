<?php session_start();
if(empty($_SESSION['id'])):
header('Location:login.php');
endif;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="home.css" />
    

<style>
   .modal-body{
    /*background-color: rgba(11,11,11,.5);*/
    background-color: #303841;
   }
    .carousel-inner{
     width: 100%;
     
    }
    .bdr{
     border-bottom: 2px solid red;
    }
    .radius{
     border-radius: 15px;
     transition: 0.5s all ease;
    }

    .radius:hover:after {
     
     content: " >";
     
    }
    .slick-initialized .slick-slide {
     outline: none;
    }
    .checked{
     color: orange;
    }
    .img-hv{
     transition: 0.5s all ease;
    }
    .img-hv:hover{ 
     transform: scale(1.2,1.2);
   }
   .active, .menu-bar ul li:hover{
      background: #2bab0d;
      border-radius: 5px;

    }
    .sub-menu-1{
      display: none;
    }
    .menu-bar ul li:hover .sub-menu-1{
      display: block;
      position: absolute;
      background: rgb(0,100,0);
      margin-top: 15px;
      margin-left: -15px;

    }
    .menu-bar ul li:hover .sub-menu-1 ul{
      display: block;
      margin: 10px;
    }
    
</style>
</head>
<body>

<!-- <header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
   
     <a href="index.html" class="navbar-brand"><h3 class="text-uppercase">Shaheed Salam-Barkat  Hall</h3></a>
     
     <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button" >
       <span class="navbar-toggler-icon"></span>
     </button>
     

   
     <div class="collapse navbar-collapse menu-bar" id="menu">
       <ul class="navbar-nav ">
         <li class="nav-item active">
           <a href="Provost/DispProvost.php" class="nav-link">Provost</a>
           <div class="sub-menu-1">
           >
             
           </div>
         </li>
         <li class="nav-item">
           <a href="Student/DispStudent.php" class="nav-link">Student</a>
        
         </li>
         <li class="nav-item">
           <a href="Staff/DispStaff.php" class="nav-link">Staff</a>
         </li>
         <li class="nav-item">
           <a href="Floor/DispFloor.php" class="nav-link">Floor</a>
         </li>
         <li class="nav-item">
           <a href="Room/DispRoom.php" class="nav-link">Room</a>
         </li>
         <li class="nav-item">
           <a href="FacilitiesProblem/DispFP.php" class="nav-link">Facilities Problem</a>
         </li> -->

         <header class="header">
        <img src="images/ju_logo.png" alt style="height: 70px; width: 65px;">
        <a href="" class="logo">Shaheed Salam-Barkat Hall</a>


        <nav class="navbar">
           <a href="provost/output.php"style=" text-decoration:none; " >Provost</a>
            <a href="Student/output.php"style=" text-decoration:none; " >Student</a>
            <a href="Staff/output.php"style=" text-decoration:none; ">Staff</a>
            <a href="Floor/output.php"style=" text-decoration:none; ">Floor</a>
            <a href="Room/output.php"style=" text-decoration:none; ">Room</a>
            <a href="FacilitiesProblem/output.php"style=" text-decoration:none; ">Facilities Problem</a>
            <!-- <a href="http://localhost:3000/php/index.php">logout <i class="fa fa-sign-out" aria-hidden="true"></i> -->
            <!-- <a href="dashboard/home.php"style=" text-decoration:none; ">Admin</a> -->
            <a href="login.php"style=" text-decoration:none; ">admin</a>
            <a href="logout process.php"style=" text-decoration:none; " >logout <i class="fa fa-sign-out" aria-hidden="true"></i>
</a>
        </nav>

        <!-- <div id="menu-btn" class="fas fa-bars"></div> -->

    <!-- <div class="collapse navbar-collapse justify-content-end" id="menu2">
     <form action="" class="form-inline">
       <input type="text" class="form-control mr-2 ">
       <button type="submit" class="btn btn-success my-1">Search</button>
     </form>
    </div> -->
    <!-- <div class="collapse navbar-collapse justify-content-end" id="modal">
              <button> <a href="logout process.php"></a> <b> Log Out</b></button> -->

              
         <!--  <button type="button" class="btn btn-outline-success sign-btn" data-toggle="modal" data-target="#signUpModal">Sign Up</button> -->
      <!-- </div> -->

</nav>
    <!----Login form---->
  <div class="modal fade" id="loginModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="modal-title w-100">
                      <h4 class="text-muted">Login To Your Accout</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
              </div>
              <div class="modal-body " >
                <form action="" class="was-validated">
                  <div class="form-group">
                      <label for="email" class="text-info font-weight-bold">Email:</label>
                      <input type="email" class="form-control" placeholder="Enter Your Email" required>
                      <div class="valid-feedback">
                          <strong>Your email address is valid</strong>
                      </div>
                      <div class="invalid-feedback">
                          <strong>Please Enter a valid email address</strong>
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="pwd" class="text-primary font-weight-bold">Password:</label>
                      <input type="password" class="form-control" placeholder="Enter Your Password" minlength="6" maxlength="8" required>
                      <div class="valid-feedback">
                          <strong>Your password very strong</strong>
                      </div>
                      <div class="invalid-feedback">
                        <strong>Enter your password first</strong>
                      </div>
                  </div> 
                   <div class="form-group form-group-check">
                      <label for="chk" class="form-group-label text-light font-weight-bold">
                       <input type="checkbox" class="form-group-input"> Remember Me
                      </label>
                  </div>  
                  <input type="submit" class="form-control btn btn-outline-success font-weight-bold" value="LogIn">
                </form>
              </div> <!----modal body close--->
              <div class="modal-footer justify-content-start">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div> <!----modal content close--->
      </div> <!----modal dialog close--->
  </div> <!----modal close--->
 
                
  
     
    </nav>
</header>
<!-- header end -->

<!-- main slide -->
<div id="pslide" class="carousel slide" data-ride="carousel" style="margin-left: 40px; margin-right:40px">
    
    <!-- slider -->

    <div class="carousel-inner" data-interval="500">
     <!-- 1st slider -->
     <div class="carousel-item active">
       <!-- slider caption -->
       <div class="carousel-caption d-none d-md-block">
       <!--   <h2 class="display-1 text-danger">This is my first slider</h2> -->
       </div>
       <img src="images/slider1.jpg" height="700px" width="100%" alt="">
     </div>
     <!-- 2nd slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
        <!--  <h2 class="display-1">This is my second slider</h2> -->
       </div>
       <img src="images/slider2.jpg" height="700px" width="100%" alt="">
     </div>
     <!-- 3rd slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
       <!--   <h2 class="display-1">This is my third slider</h2> -->
       </div>
       <img src="images/slider3.jpg" height="700px" width="100%" alt="">
     </div>
     <!-- 4th slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
      <!--    <h2 class="display-1">This is my third slider</h2> -->
       </div>
       <img src="images/slider4.jpg" height="700px" width="100%" alt="">
     </div>
    </div>
    
     <!-- next and prev icon -->
     <a href="#pslide" class="carousel-control-prev" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
     </a>
     <a href="#pslide" class="carousel-control-next" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>
</div>
<!-- slider end -->


<!-- provost  start -->
<section class="provost" id="provost">

<center> <h1 class="heading">  <span>Provost</span> </h1></center>

<div class="box-container" >

    <div class="box">
        <img src="images/face.png" alt="">
        <h1>Dr. Ali Azam Talukder</h1>
        <h4>Professor</h4>
        <h4>Department of Microbiology</h4>
        <h5>Jahangirnagar University, Savar, Dhaka-1342, Bangladesh.</h5>
        <div class="share">
            <h5>Email: aat@juniv.edu</h5>
            <h5>Office Phone: 1324</h5>
            <h5>Home Phone: 01715054872</h5>
        </div>
    </div>


</div>

</section>
<!-- provost  end -->


<!-- photo galery -->
<!-- <section class="photo_galary" style="width: 100%; margin-top:20px">
<div >
    <h2 class="display-1 bdr my-4 text-center" style="margin-top: 10px;">Photo Galary</h2>
</div>

<div class="bg-dark">
    <div class="container">
     <div class="row pslick">
       <div class="col-3">
         <div class="card">
           <img src="images/img1.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text ">I am very happy  for my 2nd home</p>
           </div>
         </div>
       </div>
       <div class="col-3">
         <div class="card">
           <img src="images/img2.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text ">I am very happy  for my 2nd home</p>
           </div>
         </div>
       </div>
       <div class="col-3">
         <div class="card">
           <img src="images/img3.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text">I am very happy  for my 2nd home</p>
           </div>
         </div>
       </div>
       <div class="col-3">
         <div class="card">
           <img src="images/img4.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text">I am very happy  for my 2nd home</p>
           </div>
         </div>
       </div>
       <div class="col-3">
         <div class="card">
           <img src="images/img5.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text">I am very happy for my 2nd home</p>
           </div>
         </div>
       </div>
       <div class="col-3">
         <div class="card">
           <img src="images/img6.jpg" width="200px" height="200px" class="rounded-circle mx-auto" alt="">
           <div class="card-body text-center">
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <h2 class="card-title">Hall Features</h2>
             <p class="card-text">I am very happy  for my 2nd home</p>
           </div>
         </div>
       </div>
     </div>
    </div>
</div> 
</section> -->

<!-- testimonial  end -->

<!-- portfolio start -->
<!-- <section style="margin-top: 20px;">
<div >
    <h2 class="display-1 bdr my-4 text-center">About</h2>
</div>


<div class="container">
    
    <ul class="nav nav-tabs justify-content-center">
     <li class="nav-item">
       <a href="#floor" data-toggle="tab" class="nav-link active" >
         Floor
       </a>
     </li>
     <li class="nav-item">
       <a href="#Room" class="nav-link" data-toggle="tab">
       Room
       </a>
     </li>
     <li class="nav-item">
       <a href="#Canteen" class="nav-link" data-toggle="tab">
      Canteen
       </a>
     </li>
    </ul>
    
    
    <div class="tab-content">
     
     <div class="tab-pane container active my-4 fade show" id="Floor">
       <div class="row">
         <div class="col-5 m-2 m-md-0 col-md-3">
           <a href="https://hall.info" target="_blank">
             <img src="images/Floor1.jpg"  width="320px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-5 m-2 m-md-0 col-md-3">
           <a href="#">
             <img src="images/Floor2.jpg"   width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-5 m-2 m-md-0 col-md-3">
           <a href="#">
             <img src="images/Floor3.jpg"  width="300px" height="300px"  class="img-hv" alt="">
           </a>
         </div>
         <div class="col-5 m-2 m-md-0 col-md-3">
           <a href="#">
             <img src="images/Floor4.jpg"  width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
       </div>
     </div>
   
     <div class="tab-pane container my-4 fade show" id="Room">
       <div class="row">
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/Room1.jpg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/Room2.jpg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/Room3.jpg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/Room4.jpg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
       </div>
     </div>
    

     <div class="tab-pane container my-4 fade show" id="Canteen">
       <div class="row">
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/canteen1.jpeg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/canteen2.jpg"   width="300px" height="300px"  class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/canteen3.jpg"  width="300px" height="300px"  class="img-hv" alt="">
           </a>
         </div>
         <div class="col-6 col-md-3">
           <a href="#">
             <img src="images/canteen4.jpg" width="300px" height="300px" class="img-hv" alt="">
           </a>
         </div>
       </div>
     </div>
    </div>
 
    
</div>
</section> -->

<!-- portfolio end -->

<!-- Portfolio Start -->
<!-- <ul class="nav nav-tabs justify-content-center">
     <li class="nav-item">
       <a href="#floor" data-toggle="tab" class="nav-link active" >
         Floor
       </a>
     </li>
     <li class="nav-item">
       <a href="#Room" class="nav-link" data-toggle="tab">
       Room
       </a>
     </li>
     <li class="nav-item">
       <a href="#Canteen" class="nav-link" data-toggle="tab">
      Canteen
       </a>
     </li>
    </ul> -->
    <!-- <section id="contact" class="contact">
 <h1 class=" heading">Contact</h1>
        <div class="container" id="cont">
  
          <div class="section-title" id="sec_cond"> -->
<div class="container-fluid pt-5 pb-3" id="portfolio" style="margin-top:20px">
<h1 class=" heading">Galary</h1>
<div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first"><a href="#room" > Room </a>
                      </li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second"><a href="#floor" >Floor</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third"><a href="#canteen" >Canteen</li>
                    </ul>
                </div>
            </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center"id="sec_cond1">
                <!-- <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6; font-size:100px">Gallery</h1> -->
                
                <!-- <h1 class="position-absolute text-uppercase text-primary" style="font: size 3.5rem;;">Galary</h1> -->
                <!-- <center> <h1 class="heading">  <span>gallery</span> </h1></center> -->
         
            
            <div class="row portfolio-container" id="room">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" >
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Room1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Room1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Room2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Room2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Room3.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Room3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Floor1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Floor1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" id="floor">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Floor2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Floor2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/Floor2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/Floor2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="canteen">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/canteen1.jpeg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/canteen1.jpeg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/canteen1.jpeg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/canteen1.jpeg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="images/canteen3.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/canteen3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Portfolio End -->

<!-- contact start -->
<!-- <section style="margin-top: 30px;">
<div id="contact">
<center> <h1 class="heading">  <span>Contact</span> </h1></center>
  
</div>

<div class="container">
    <div class="row">
     <div class="col-md-8">

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.2034418647563!2d90.26202471429966!3d23.882403589639125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9a02b7f1e89%3A0x6d20e40f3a231f37!2sShaheed%20Salam%20Barkat%20Hall!5e0!3m2!1sen!2sbd!4v1643004346139!5m2!1sen!2sbd" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
       
     </div>
     <div class="col-md-4">
       <h2><strong>Contact</strong></h2>
       <address>
         Jahangirnagar University <br>
         Savar,Dhaka <br>
         Bangladesh <br>
         Mobile: +880123456789 <br>
         <a href="#">https://www.ssb.juniv.edu</a>
       </address>
     </div>
    </div>
</div>
</section> -->
<!-- message section start-->


<!-- <section style="margin-top: 30px;">
<div>
     <h3 class="text-center my-4" style="border-bottom: 1px solid red; margin-top:10px">Send Your Message</h3>

     <form action="">
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
           <input type="text" class="form-control" placeholder="Name">
          </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <input type="email" class="form-control" placeholder="Email">
           </div>
         </div>
       </div>
       <div class="form-group">
         <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="Enter Your Message" ></textarea>
       </div>
       <div class="form-group">
         <button class="form-control btn btn-primary mb-4" type="submit">
           Send
         </button>
       </div>
       
     </form>
    </div>
    </section>
     -->

<!-- commit -->
<!-- contact end -->

 <!-- Contact Start -->


 <section id="contact" class="contact">
 <h1 class=" heading">Contact</h1>
        <div class="container" id="cont">
  
          <div class="section-title" id="sec_cond">
         
            <!-- <p>If you have any query or douts please contact me.Thanks!!!!!</p> -->
            <!-- </div> -->
  
          <div class="row" data-aos="fade-in">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                <i class="bx bx-home"></i>
                  <h4>Location:</h4>
                  <p>Jahanginagar University,savar</p>
                </div>
                
                <div class="mail">
                    <i class="bx bx-envelope"></i>
                    <h4>mail:</h4>
                    <p>ssbhall@gmail.com</p>
                  </div>
  
                <div class="phone">
                  <i class="bx bxl-skype"></i>
                  <h4>Call:</h4>
                  <p>02224491052</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.2035801530205!2d90.26202471481797!3d23.882398684524446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9a02b7f1e89%3A0x6d20e40f3a231f37!2sShaheed%20Salam%20Barkat%20Hall!5e0!3m2!1sen!2sbd!4v1647113157126!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="message/message.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Stu_ID" class="message">Student ID</label>
                    <input type="number" name="Stu_ID" class="form-control" id="Stu_ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Name" class="message">Student Name</label>
                    <input type="text" class="form-control" name="Name" id="Name" data-rule="Name" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <!-- <div class="form-group">
                <label for="Stu_id">Student ID</label>
                <input
                  type="number"
                  class="form-control"
                  id="Stu_id"
                  name="Stu_id"
                />
              </div> -->
                <div class="form-group">
                  <label for="Room_Num" class="message">Room Number</label>
                  <input type="text" class="form-control" name="Room_Num" id="Room_Num" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <label for="Messages" class="message">Message</label>
                  <textarea type="text" class="form-control" name="Messages" id="Messages" rows="15" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"  id="button_mes"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
          </div>
        </div>
      </section>
     <!-- Contact End -->


<!-- footer start -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
        <a href="Provost/output.php"> <i class="fas fa-chevron-right"></i> Provost </a>
        <a href="Student/output.php"> <i class="fas fa-chevron-right"></i> Student </a>
        <a href="Staff/output.php"> <i class="fas fa-chevron-right"></i> Staff </a>
        <a href="FacilitiesProblem/output.php"> <i class="fas fa-chevron-right"></i> Facilities Problem</a>
    </div>

    <div class="box">
        <h3>Useful Links</h3>
        <a href="#"> <i class="fas fa-chevron-right"></i> NOC &GO </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> Download Form </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> Result </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> Reaserch Work </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> Office </a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 1324 </a>
        <a href="#"> <i class="fas fa-phone"></i> 02224491045-51  </a>
        <a href="#"> <i class="fas fa-envelope"></i> ssbhall@gmail.com </a>
        <a href="https://www.google.com/maps/place/Shaheed+Salam+Barkat+Hall/@23.8823987,90.2620247,17z/data=!3m1!4b1!4m5!3m4!1s0x3755e9a02b7f1e89:0x6d20e40f3a231f37!8m2!3d23.8823987!4d90.2642134"> <i class="fas fa-map-marker-alt"></i> Jahangirnagar University, Savar, Dhaka-1342, Bangladesh. </a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a target="_blank"  href="https://www.facebook.com/ssbhju" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

</div>



</section>



<!-- footer end -->
<!-- footer -->
<div class="container-fluid bg-dark text-white mt-5 py-1 px-sm-1 px-md-5" style="height: 150px;">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4" style="margin-top: 5px;">
                <a class="btn btn-light btn-social mr-2" href="https://twitter.com/2013_shakil" target="_blank"><i class="fab fa-twitter" ></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/profile.php?id=100015160248051&sk=friends" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/md-shakil-ahmed-b173b91ba/"  target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="https://www.instagram.com/2013_shakil_ahmed/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div> -->
            <!-- <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Shakil Ahmed</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#"></a>
            </p> -->
            <div class="credit"> created by <span>Group 8</span> | all rights reserved </div>
        </div>
    </div>
     <!-- footer -->

 <!-- Scroll to Bottom -->
 <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
<!--  smooth scroll -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- <script>
// All animations will take exactly 500ms
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 900,
    speedAsDuration: true                                                                     
});
</script> -->

<!-- jquery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>

<script>
    $('.pslick').slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay:true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
     arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
     arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
</script>

</body>
</html>
