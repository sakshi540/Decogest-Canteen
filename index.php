<?php

include 'components/connect.php';

//session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


include 'components/add_cart.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Table booking</title>
    
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <?php include 'components/user_header.php'; ?>


    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Table Booking</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">No. of seats</label>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                <input type="number" id="Novalues" name="Novalues" />
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>
