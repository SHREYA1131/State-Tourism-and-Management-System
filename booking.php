<?php
$con=mysqli_connect('localhost','root',"") ;
mysqli_select_db($con,'Tourism-Management-System---PHP-master')or die("Connection Failed to select database");
$username=$_GET['username'];
$query="SELECT * FROM booking WHERE customer_name='$username'";
$result=mysqli_query($con,$query);
$pack=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<html>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<style>
     body{
        background-image:url('https://i.redd.it/o8dlfk93azs31.jpg');
    background-position:center;
    background-size:cover;
    opacity:.9;
     }
 </style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">State Tourism</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="customerhome.php?username=<?php echo $username?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.html">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cancel_buk.php?username=<?php echo $username?>">Cancel Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php?username=<?php echo $username?>">My Bookings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div>
    <h1 style="color:white;opacity:1;text-align:center;">YOUR BOOKINGS ARE:</h1>
    
    <div class="container-fluid">
        <div class="row">
            <?php foreach($pack as $post1){ ?>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                    <img src="cc1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6><?php echo 'package id: '.$post1['package_id'];?></h6>
                            <h6><?php echo 'location: '.$post1['location'];?></h6>
                            <h6><?php echo 'date: '.$post1['date'];?></h6>
                            <h6><?php echo 'number of person: '.$post1['no_of_person'];?></h6>
                            <h6><?php echo 'travel mode: '.$post1['travel_mode'];?></h6>
                            <h6><?php echo 'total cost: '.$post1['total_cost'];?></h6>
                    </div>
            </div></div>
                <?php } ?> 
                </div>
            </div>
            </div>
            </body>
</html>