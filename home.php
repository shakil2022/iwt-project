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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

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
    <!-- header start -->
<header>
    <!-- navigation start -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
     <!-- logo -->
     <a href="index.html" class="navbar-brand"><h3 class="text-uppercase">Shaheed Salam-Barkat  Hall</h3></a>
     <!-- responsive collapse menu -->
     <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button" >
       <span class="navbar-toggler-icon"></span>
     </button>
     <!-- responsive collapse menu end -->

     <!-- nav menu start -->
     <div class="collapse navbar-collapse menu-bar" id="menu">
       <ul class="navbar-nav ">
         <li class="nav-item active">
           <a href="Provost/DispProvost.php" class="nav-link">Provost</a>
           <div class="sub-menu-1">
            <!-- <ul>
              <li><a href="#">Call</a></li>
              <li><a href="#">Call</a></li>
              <li><a href="#">Call</a></li>
            </ul> -->
             
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
         </li>

          <!--   search -->

    <div class="collapse navbar-collapse justify-content-end" id="menu2">
     <form action="" class="form-inline">
       <input type="text" class="form-control mr-2 ">
       <button type="submit" class="btn btn-success my-1">Search</button>
     </form>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="modal">
              <button> <a href="logout process.php"></a> <b> Log Out</b></button>

              
         <!--  <button type="button" class="btn btn-outline-success sign-btn" data-toggle="modal" data-target="#signUpModal">Sign Up</button> -->
      </div>

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
  <!----Sign up form---->
  <!-- <div class="modal fade" id="signUpModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="modal-title w-100">
                      <h4 class="text-muted">Sign Up for free</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div> -->
              </div> <!----modal header close-->
<!--               <div class="modal-body">
                <form action="" class="was-validated">
                  <div class="form-group">
                      <label for="fnm" class="text-info font-weight-bold">First Name:</label>
                      <input type="text" class="form-control" id="fnm" placeholder="Enter Your First Name" required>
                    </div>
                    <div class="form-group">
                      <label for="lnm" class="text-info font-weight-bold">Last Name:</label>
                      <input type="text" class="form-control" id="lnm" placeholder="Enter Your last Name" required>
                    </div>
                    <div class="form-group">
                      <label for="phn" class="text-info font-weight-bold">Phone Number:</label>
                      <input type="tel" class="form-control" id="phn" placeholder="Enter Your phone number" required>
                    </div>
                     <div class="form-group">
                      <label for="S_id" class="text-info font-weight-bold">Student ID:</label>
                      <input type="id" class="form-control" id="S_id" placeholder="Enter Your Student ID" required>
                    </div>
                    <div class="form-group">
                      <label for="S_id" class="text-info font-weight-bold">Session:</label>
                      <input type="times" class="form-control" id="#" placeholder="Enter Your Session" required>
                    </div>

                    <div class="form-group">
                      <label for="My" class="text-info font-weight-bold">Department</label>
                      <select name="#" class="control" id="My" style="width: 100%;">
                          <option value="select your Country">Select Your Department</option>
                          <option value="#">IIT</option>
                          <option value="#">CSE</option>
                          <option value="#">English</option>
                          <option value="#">Bangla</option>
                          <option value="#">IBA</option>
                          <option value="#">IRS</option>
                          <option value="#">CLC</option>
                          <option value="#">Statistics</option>
                          <option value="#">Mathematics</option>
                          <option value="#">Economics</option>
                          <option value="#">Geography</option>
                          <option value="#">Physics</option>
                          <option value="#">Chemistry</option>
                          <option value="#">Zoology</option>
                          <option value="#">Botany</option>
                          <option value="#">IER</option>
                          <option value="#">G&P</option>
                          <option value="#">DaD</option>
                          <option value="#">Enthropology</option>
                          <option value="#">History</option>
                          <option value="#">Philosophy</option>
                          <option value="#">Biochemistry</option>
                          <option value="#">Microbiology</option>
                          <option value="#">Pharmacy</option>
                          <option value="#">Finance& Banking</option>
                          <option value="#">Management Studies</option>
                          <option value="#">Marketing</option>
                      </select>
                    </div>

                  <div class="classrm-group" >
                      <label for="email" class="text-info font-weight-bold">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                      <div class="valid-feedback">
                          <strong>Your email address is valid</strong>
                      </div>
                      <div class="invalid-feedback">
                          <strong>Please Enter a valid email address</strong>
                      </div>
                    </div>
                   <div class="form-group">
                      <label for="pwd" class="text-primary font-weight-bold">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password" minlength="6" maxlength="8" required>
                      <div class="valid-feedback">
                          <strong>Your password is very strong</strong>
                      </div>
                      <div class="invalid-feedback">
                        <strong>Enter your password first</strong>
                      </div>
                  </div> 
                   <div class="form-group form-group-check">
                      <label for="chk" class="form-group-label text-muted font-weight-bold">
                       <input type="checkbox" class="form-group-input "> Remember Me
                      </label>
                  </div>  
                  <input type="submit" class="form-control btn btn-outline-success font-weight-bold" value="Sign Up"> -->
                </form> <!----form close--->
              </div> <!----modal body close--->
              <!-- <div class="modal-footer justify-content-start">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div> -->
          </div> <!----modal content close--->
      </div> <!----modal dialog close--->
  </div> <!----modal close--->
  
      </ul>
     </div>
     <!-- nav menu end -->
    </nav>
</header>
<!-- header end -->

<!-- main slide -->
<div id="pslide" class="carousel slide" data-ride="carousel">
    
    <!-- slider -->

    <div class="carousel-inner" data-interval="500">
     <!-- 1st slider -->
     <div class="carousel-item active">
       <!-- slider caption -->
       <div class="carousel-caption d-none d-md-block">
       <!--   <h2 class="display-1 text-danger">This is my first slider</h2> -->
       </div>
       <img src="images/slider1.jpg" height="600px" width="100%" alt="">
     </div>
     <!-- 2nd slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
        <!--  <h2 class="display-1">This is my second slider</h2> -->
       </div>
       <img src="images/slider2.jpg" height="600px" width="100%" alt="">
     </div>
     <!-- 3rd slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
       <!--   <h2 class="display-1">This is my third slider</h2> -->
       </div>
       <img src="images/slider3.jpg" height="600px" width="100%" alt="">
     </div>
     <!-- 4th slider -->
     <div class="carousel-item">
       <!-- slider caption -->
       <div class="carousel-caption">
      <!--    <h2 class="display-1">This is my third slider</h2> -->
       </div>
       <img src="images/slider4.jpg" height="600px" width="100%" alt="">
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


<!-- testimonial  start -->
<section class="director" id="director">

<center> <h1 class="heading"> Provost  </h1></center>

<div class="box-container">

    <div class="box">
        <img src="images/1642924835587.jpg" alt="">
        <h3>Dr. Ali Azam Talukder</h3>
        <h5>Professor</h5>
        <h5>Department of Microbiology</h5>
        <h5>Jahangirnagar University, Savar, Dhaka-1342, Bangladesh.</h5>
        <div class="share">
            <h4>Email: aat@juniv.edu</h4>
            <h4>Office Phone: 1324</h4>
            <h4>Home Phone: 01715054872</h4>
        </div>
    </div>


</div>

</section>
<div >
    <h2 class="display-1 bdr my-4 text-center">Photo Gallary</h2>
</div>
<!-- slick carousel/testimonial -->
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

<!-- testimonial  end -->

<!-- portfolio start -->
<div >
    <h2 class="display-1 bdr my-4 text-center">About</h2>
</div>

<!-- nav tabs -->
<div class="container">
    <!-- tab button start-->
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
    <!-- tab button end-->

 <!-- tab button content start-->
    <div class="tab-content">
     <!-- Floor  -->
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
     <!-- Room -->
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
     <!--Canteen-->

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
    <!-- tab button content end-->
    
</div>

<!-- portfolio end -->

<!-- contact start -->
<div id="contact">
    <h2 class="display-1 bdr my-4 text-center">Contact</h2>
</div>

<div class="container">
    <div class="row">
     <div class="col-md-8">
       <!-- call the map -->
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.2034418647563!2d90.26202471429966!3d23.882403589639125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9a02b7f1e89%3A0x6d20e40f3a231f37!2sShaheed%20Salam%20Barkat%20Hall!5e0!3m2!1sen!2sbd!4v1643004346139!5m2!1sen!2sbd" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.0968402611893!2d90.2689772142997!3d23.88618448949393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9bcca9e8a09%3A0x9767003464a0acf0!2sSheikh%20Hasina%20Hall!5e0!3m2!1sen!2sbd!4v1642074330254!5m2!1sen!2sbd" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
       
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

    <div>
     <h3 class="text-center my-4" style="border-bottom: 1px solid red;">Send Your Message</h3>

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
    
</div>

<!-- contact end -->

<!-- footer start -->

<footer class="bg-dark">
    <div class="container p-5">
     <h2 class="text-center text-light">Copyright &copy; Jahangirnagar University,Savar,Dhaka</h2>
    </div>
</footer>



<!-- footer end -->






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
