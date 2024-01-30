<?php
include("dbconnection.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){
  $check_in=$POST["check_in"];
  $check_out=$POST["check_out"];
  $fname=$_POST["fname"];
  $id_proof=$_POST["id_proof"];
  $contact_no=$_POST["contact_no"];
  $email_id=$_POST["email_id"];
  $info_date=$_POST["info_date"];
  $code_no=$_POST["code_no"];

    $ins ="insert into book_section(check_in,check_out,fname,id_proof,contact_no,email_id,info_date,code_no)values('$check_in','$check_out','$fname','$id_proof','$contact_no','$email_id','$info_date','$code_no')";

    $verify =mysqli_query($conn,$ins);
    if($verify){
          echo "<script>alert('sent success | your confirmation detail will be sent on yor email within 24hr')</script>";
      }else{
          echo "<script>alert('something went wrong')</script>";
      }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="book.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
          <img src="https://cdn-icons-png.flaticon.com/512/36/36447.png?w=740&t=st=1679465582~exp=1679466182~hmac=39008b6d0296d9fa49c80064d283c58bca18f38633b25aa1b2a3f64d5dc45974" alt="" height="40" width="40">
          <button class="btn btn-primary"><a href="index.php">Home</a></button>
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
 
      <header class="container">
        <div class="">
            <div class="col-sm-9">
                <h2>About Us</h2>
                <p>The villa owns a beautiful swimming pool to relax and refresh yourself. The living room is furnished with beautiful modern interiors and opens to the swimming pool and deck area. There is a game room available with a pool table and board games, and a widespread playground where you can
                   indulge in games like cricket, football, and volleyball.</p>
                   <center><a href="About.php" type="button" class="btn">for more</a></center>
            </div>


            

        </div>  
      </header>
      <hr>
              <aside class="sticky-top"> 
                <div class="row">
                    <p>Starting from INR 21,160/-</p>
                    <h4 class="col-md-6">INR 18,400/-</h4>
                    <h6 class="col-md-6" style="color:brown; background-color: bisque; border-radius: 12px; font-size: large;">30% off</h6>
                    <p>per villa</p>
                </div>
              </aside>

            <hr>

      <h3 class="heading container">Select Package Option</h3>
      <div class="container-fluid">
        <div class="card1">
            <h5>4 BHK Villa</h5>
            <hr>
            <p>Stay in a luxurious 4BHK villa that is equipped with all contemporary amenities. Villa features 4 spacious bedrooms, with attached bathrooms, and common spaces,
                 and windows overlooking the picturesque views of nature. The rooms are fitted with king-sized beds
                  and offer a maximum occupancy of 20 adults.</p>
                  <div class="row">
                    <div class="col-sm-6">
                        <img src="https://i.pinimg.com/originals/db/4a/aa/db4aaaf6fcb515ba1bb1f14f47928ead.jpg" alt="jhee" class="w-100">
                     </div>
                     <div class="col-sm-6">
                        <h5>Room Amenities</h5>
                        <ul>
                            <li>Wifi</li>
                            <li>Television with Satellite/cable channels</li>
                            <li>Air conditioning</li>
                            <li>Kitchen</li>
                            <li>price:<h4>15,000/-</h4></li>
                            <li>CODE: Rvillanor12</li>
                            <button href="#book">book</button>
                        </ul>
                     </div>
                  </div>
                  <center> <h6 style="color:blueviolet"><button id="show">show more details</button></h6> </center>
             <div id="showme" style="display: none;">
             <h5>inclusions: abc</h5>
             <p>Stay - <br>
                The 4BHK villa consists of 4 spacious bedrooms, each bedroom is equipped with a large double bed, king-size living halls.
                 This villa comfortably takes up to 12 guests with the provision of an extra mattress.</p>
                 <p>Meals - <br>
                    Meals are provided at extra cost as per guest preferences
                    <br>
                    <br>
                    Safety Measures - <br>
                    All the cottages are sanitized thoroughly before your check-in.
                    Restaurants and common areas are also sanitized at regular intervals to avoid any type of contamination. 
                    Staff will try their best to maintain proper hygiene and cleanliness throughout your stay. 
                    Hand sanitized are installed at various points reminding you to keep your hands sanitized.
    <br><br>
                    View Child/baby policy - <br>
                    Children between 0-5 years of age will not incur any additional charge and the child between 6-12 years of age will incur an additional charge.
                <br>  <br>  
                    Extra Guest Policy - <br>
                    An extra guest can be accommodated at an extra cost.</p>
                </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#show").click(function(){
                    $("#showme").toggle();
                })
            })
        </script>

        <hr class="container">
        <div class="card2">
            <h5>4 BHK Villa</h5>
            <hr>
            <p>Stay in a luxurious 4BHK villa that is equipped with all contemporary amenities. Villa features 4 spacious bedrooms, with attached bathrooms, and common spaces,
                 and windows overlooking the picturesque views of nature. The rooms are fitted with king-sized beds
                  and offer a maximum occupancy of 20 adults.</p>
                  <div class="row">
                    <div class="col-sm-6">
                        <img src="https://tse3.mm.bing.net/th?id=OIP.9qvDpKi-8oXHBAiFD3xYQQHaE8&pid=Api&P=0" alt="jhee" class="w-100">
                     </div>
                     <div class="col-sm-6">
                        <h5>Room Amenities</h5>
                        <ul>
                            <li>Wifi</li>
                            <li>Television with Satellite/cable channels</li>
                            <li>Air conditioning</li>
                            <li>Kitchen</li>
                            <li>Food</li>
                            <li>price:<h4>18,000/-</h4></li>
                            <li>CODE: Rvilla123</li>
                            <button href="#book">book</button>
                        </ul>
                     </div>
                  </div>
                  <center> <h6 style="color:blueviolet"><button id="show1">show more details</button></h6> </center>
             <div id="showme1">
             <h5>inclusions:</h5>
             <p>Stay - <br>
                The 4BHK villa consists of 4 spacious bedrooms, each bedroom is equipped with a large double bed, king-size living halls.
                 This villa comfortably takes up to 12 guests with the provision of an extra mattress.</p>
                 <p>Meals - <br>
                    Meals are provided at extra cost as per guest preferences
                    <br>
                    <br>
                    Safety Measures - <br>
                    All the cottages are sanitized thoroughly before your check-in.
                    Restaurants and common areas are also sanitized at regular intervals to avoid any type of contamination. 
                    Staff will try their best to maintain proper hygiene and cleanliness throughout your stay. 
                    Hand sanitized are installed at various points reminding you to keep your hands sanitized.
    <br><br>
                    View Child/baby policy - <br>
                    Children between 0-5 years of age will not incur any additional charge and the child between 6-12 years of age will incur an additional charge.
                <br>  <br>  
                    Extra Guest Policy - <br>
                    An extra guest can be accommodated at an extra cost.</p>
                </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#show1").click(function(){
                    $("#showme1").toggle();
                })
            })
        </script>

        <hr class="container">

        <div class="card3">
            <h5>4 BHK Villa  <sup>*birthday %*</sup></h5>
            <hr>
            <p>Stay in a luxurious 4BHK villa that is equipped with all contemporary amenities. Villa features 4 spacious bedrooms, with attached bathrooms, and common spaces,
                 and windows overlooking the picturesque views of nature. The rooms are fitted with king-sized beds
                  and offer a maximum occupancy of 30-40 adults.</p>
                  <div class="row">
                    <div class="col-sm-6">
                        <img src="https://www.mostbeautifulthings.net/wp-content/uploads/2014/04/Wonderful-Villas-10.jpg" alt="jhee" class="w-100">
                     </div>
                     <div class="col-sm-6">
                        <h5>Room Amenities</h5>
                        <ul>
                            <li>Wifi</li>
                            <li>Television with Satellite/cable channels</li>
                            <li>Air conditioning</li>
                            <li>Kitchen</li>
                            <li>Food</li>
                            <li>price:<h4>17,000/-</h4>-1000/- birthday</li>
                            <li>CODE: RvillaBirth12</li>
                            <button href="#book">book</button>
                            <br><br>
                            <div class="buttont">
                      <button class="toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle " >
                        for more
                      </button>
                    </div>
                        </ul>
                     </div>
                  </div>
                  
                     

                  <div class="collapse" id="navbarToggleExternalContent">
                    <div class=" p-4">
                        <h5>inclusions:</h5>
                        <p>Stay - <br>
                            The 4BHK villa consists of 4 spacious bedrooms, each bedroom is equipped with a large double bed, king-size living halls.
                             This villa comfortably takes up to 12 guests with the provision of an extra mattress.</p>
                             <p>Meals - <br>
                                Meals are provided at extra cost as per guest preferences
                                <br>
                                <br>
                                Safety Measures - <br>
                                All the cottages are sanitized thoroughly before your check-in.
                                Restaurants and common areas are also sanitized at regular intervals to avoid any type of contamination. 
                                Staff will try their best to maintain proper hygiene and cleanliness throughout your stay. 
                                Hand sanitized are installed at various points reminding you to keep your hands sanitized.
                <br><br>
                                View Child/baby policy - <br>
                                Children between 0-5 years of age will not incur any additional charge and the child between 6-12 years of age will incur an additional charge.
                            <br>  <br>  
                                Extra Guest Policy - <br>
                                An extra guest can be accommodated at an extra cost.</p>
                            </div>
                    </div>
                  </div>  
        </div>
        


        


      </div>
      <div class="container" id="book">
       <center><h2>book your trip now!!</h2></center> 
        <br>
        <form action="#" method="post">
     <div class="d-flex flex-column-reverse">
      
     <div class="d-flex flex-column-reverse">
        <p>checkIn date :<input type="date"  required name="check_in"></p>
        </div>
       <div class="d-flex flex-column-reverse">
        <p>checkOut date :<input type="date"  required name="check_out"></p>
        </div>
        <p>name : <br><input type="text" required placeholder="Name" name="fname"></p>
      </div>
      <div class="d-flex flex-column-reverse">
        <p>Id proof:(addhar number)<br><input type="text" placeholder="id_proof" required name="id_proof"></p>
      </div>
       <div class="d-flex flex-column-reverse">
       <p>contact No. :<input type="number" placeholder="contact no." aria-required="false" name="contact_no"></p>
       </div>
       <div class="d-flex flex-column-reverse">
       <p>Email id :<input type="emal" placeholder="email" aria-required="false" name="email_id"></p>
       </div>
        <div class="d-flex flex-column-reverse">
          <p>code no : <input type="text" placeholder="code"  name="code_no"></p>
          </div>
       <div >
       <center><input type="submit" class="btn btn-primary"></center>
        </div>
        </form>
         
        </div>

</body>
</html>