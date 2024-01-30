<?php
include("dbconnection.php");
if ($_SERVER['REQUEST_METHOD']=="POST"){
  $cli_name =$_POST["cli_name"];
  $question =$_POST["question"];

    $ins ="insert into question_section(question,cli_name)values('$question','$cli_name')";

    $verify =mysqli_query($conn,$ins);
    if($verify){
          echo "<script>alert('Question sent success')</script>";
      }else{
          echo "<script>alert('something went wrong')</script>";
      }
}
?>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name = $POST['user_name'];
    $user_rating = $POST['user_rating'];
    $user_text = $POST['user_text'];
    $dateTime = time();

    $ins ="insert into review_section(user_name,user_rating,user_text,dateTime)values('$user_name','$user_rating','$user_text','$dateTime')";

    $verify =mysqli_query($conn,$ins);
    if($verify){
          echo "<script>alert('sent success')</script>";
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
    <link rel="stylesheet" href="review.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
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
              <a class="nav-link" href="About.html">About us</a>
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
   <h2>Review | Rating section </h2>
   <p>hope you like our service!!</p>
   <form action="#" method="post">
   <div class="d-flex flex-column">
    <p>Name:</p>
    <input type="text" class="p-2" name="cli_name">
        <p>Questions: </p>
        <input type="text" class="p-2" name="question"><br>
    </div>
    <input type="submit" class="btn btn-primary">
    </form>
  </div>
  <hr class="container">
  <form action="#" method="post">
  <div class="container">
    <div class="d-flex flex-column-reverse">
        <p >NAME: </p>
        <input type="text" class="p-2" name="user_name">
    </div>
    <div class="d-flex flex-column-reverse">
        <p>Experience: </p>
        <input type="text" name="user_rating">
    </div>
    <div class="d-flex flex-column-reverse">
        <p>Review: </p>
        <input type="text" class="p-2" name="user_text">
    </div>
    <div>
        <input type="submit" class="btn btn-primary">
    </div>

  </div>
  </form>

  <?php
$result = mysqli_query($conn,"SELECT * FROM review_section");

if (mysqli_num_rows($result) > 0) {
?>

<div>
<h4>name: </h4>
<h6>experience:</h6>
<h6>review:</h6>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<div class="container">
<h4><?php echo $row["user_name"]; ?></h4>
<h6><?php echo $row["user_rating"]; ?></h6>
<h6><?php echo $row["user_text"]; ?></h6>
</div>
<?php
$i++;
}
?>
</div>
<?php
}
else{
echo "No result found";
}
?>

 
 
    
</body>
</html>