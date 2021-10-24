<?php
$username=$_GET['username'];
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
    <br>
    <div style="margin-left:600px;margin-top:100px;"class="col-lg-3 col-md-3 col-12">
                    <div style="opacity:0.9;border-radius:20px;" class="card">
                    <img src="cc1.png" class="card-img-top" alt="...">
                    <div class="card-body">
    <form name="cancel.html" action="cancel1.php" method="post">

        <table align="center" border="3">
            <tr>
                <td style="text-align:right">
                    <font color="red">Package id</font>
                </td>
                <td>
                    <input type="text" name="package_id">
                </td>
            <tr>
                <td style="text-align:right">
                    <font color="red">Customer Name</font>
                </td>
                <td>
                    <input type="text" name="customer_name">
                </td>

            <tr>
                <td style="text-align:center"><input type="submit" value="cancel Booking"></td>
                <td>
                    <input type="button" name="nm11" value="Logout">
                    <a href="customerhome.php?username=<?php echo $username?>"><input type="button" name="n2m11" value="Back"></a>
                </td>

        </table>

    </form>
    </div>
    </div>

   
</body>

</html>