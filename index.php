<?php
include('dbconnection.php');
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $fullname= $_POST["fullname"];
  $date=$_POST["date"];
  $members=$_POST["members"];
  $email=$_POST["email"];
  $phoneNum=$_POST["phoneNum"];

  
  $ins="insert into enquiry(fullname,date,members,email,phoneNum)values('$fullname','$date','$members','$email','$phoneNum')";

  $verify =mysqli_query($conn,$ins);
  if($verify){
        echo "<script>alert('sent success | Avability will be sent ')</script>";
    }else{
        echo "<script>alert('something went wrong')</script>";
    }
}



?>

<html lang="en">
<head>
  <title>R-villa</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
   <span><img src="https://villascroatia.com/wp-content/uploads/2020/08/modern-luxury-villa-pool-medulin-croatia-01-2.jpg" alt="" class=""></span>
  </div>
  <nav class="navbar fixed-top">
    <div class="container-fluid">
      <img src="https://cdn-icons-png.flaticon.com/512/36/36447.png?w=740&t=st=1679465582~exp=1679466182~hmac=39008b6d0296d9fa49c80064d283c58bca18f38633b25aa1b2a3f64d5dc45974" alt="" height="40" width="40">
      <button class="btn btn-primary"> <a href="booking.php">booking</a> </button>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:white">menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" style="color:white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Review.php">Review</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               inquiry
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" style="color:black">email- Rvilla@gmail.com</a></li>
                <li><a class="dropdown-item" href="#" style="color:black">call- 1001001120</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
  <aside class="container  update">
    <form action="#" method="post">
    <div class="row">
     <center><h3>For Availability</h3></center> 
     <div class="col-sm-2">
        <p>name : <br><input type="text" placeholder="Name" required name="fullname"></p>
      </div>
      <div class="col-sm-2">
        <p>date : <br><input type="date" required name="date"></p>
      </div>
       <div class="col-sm-2">
       <p>members :<input type="number" placeholder="Members" aria-required="false" name="members"></p>
       </div>
       <div class="col-sm-2">
        <p>email: <input type="email" placeholder="email" required name="email"></p>
        </div>
        <div class="col-sm-2">
          <p>mobile number<input type="number" placeholder="Number" required name="phoneNum"></p>
          </div>
       <div >
       <center><input type="submit" class="btn btn-primary"></center>
        </div>

    </div>
  </form>
  </aside>
</div>


<div class="container info">
  <div class="row">
    <div class="col-sm-6">
      <img src="https://imperiobanus.com/wp/wp-content/uploads/2018/04/1-1.jpg" alt="" class="w-100">
    </div>
    <div class="col-sm-6 text">
      <h5>Maharashtra's most exclusive villa</h5>
      <p>in Reasonable Rate's (Night/Day)</p>
      <br>
      <button class="btn btn-primary"><a href="information.html">For More</a></button>
    </div>
  </div>
</div>


<hr>

<div class="container catalog">
  <div class="row">
    <div class="col-sm-6">
        <img src="https://i.pinimg.com/originals/86/99/fc/8699fc9a38763573a99e443bf7b66617.jpg" class="w-100" alt="">
    </div>
    <div class="col-sm-6 text2 ">
      <h5>Designer Rooms</h5>
       <p>Handpicked amongst the most beautiful in the world. Extending to you everything you desire and to inspire a new way of travel and living, each home has its own unique story to tell and its myriad experiences to remember.</p>
    </div>

  </div>
  <div class="row">
    <div class="col-sm-6 text2">
      <h5>Homecrafted Hospitality</h5>
       <p>Staying into creating the most heartfelt and exuberant memories. There's service to match. At Our homes friendly face meets you at the door, and the sheets, towels and toiletries are taken care of, to our exacting standards</p>
    </div>
    <div class="col-sm-6">
      <img src="https://th.bing.com/th/id/OIP.DAPu4smgcBr_VoXN_agCQgHaFj?pid=ImgDet&rs=1" class="w-100" alt="">
  </div>

  </div>
  <div class="row">
    <div class="col-sm-6">
        <img src="https://c.stocksy.com/a/YhB900/z9/2189936.jpg" alt="" class="w-100">
    </div>
    <div class="col-sm-6 text2">
      <h5>No Disturbance</h5>
       <p>you will level up in the domain of amazing experiences. If it is on your bucket list, it’s on ours too. Whether you want a private yoga session or play lawn tennis or try the local cuisine or a bbq dinner,our villa has you covered.</p>
    </div>
  </div>
</div>
<button><a href="Review.php">review</a></button>
<footer class="container-fluid">

  <div class="container foot">
  <div class="row">
    <div class="col-sm-3">
      <h6>Connect</h6>
      <p>tell- 110-25255-232</p>
      <p>email- Rvillamaha@gmail.com</p>
      <p>call- 803518265 / 7452937353</p>
    </div>
    <div class="col-sm-3">
      <h6>Address</h6>
      <p>Beside Bus stand, Old Mumbai Pune Hwy, Gawliwada, Rao Colony,
        Lonavala, Maharashtra 410401</p>
      <p>Maharashtra,Thane</p>
    </div>
    <div class="col-sm-3">
      <h6>Support</h6>
      <p> FAQs</p>
      <p>Privacy Policy</p>
      <p>Terms & Condition</p>
  </div>
  <div class="col-sm-3">
   <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
   <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>

  </div>
    

</div>
  
<hr style="color:white">
<div class="container-fluid  grey">
<p> ©️ 2023 | R villa | made with love by Artescape_Artist</p>
</div>
</div>
</footer>
  
</body>
</html>