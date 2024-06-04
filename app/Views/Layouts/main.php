<html>
    <head>
    <title><?= (isset($var)?$var:'hottel mgmt system')?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body class="d-flex flex-column h-100">

<nav class="navbar navbar-dark bg-dark">
    
   <?php if (session()->get('isLoggedIn')): ?>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="/user_dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/checkavailability">check availability</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/mybookings">My Bookings</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
          <a class="nav-link"  href="/logout">Logout</a>
        </li>
      </ul>
     
    </div>
    <?php elseif (session()->get('isLoggedIn')): ?>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="/admin_dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/index">bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/checkavailability">check availability</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/mybookings">My Bookings</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item">
          <a class="nav-link"  href="/logout">Logout</a>
        </li>
      </ul>
     
    </div>
    <?php else:?>

  <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/adminlogin">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/userlogin">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/ourrooms">Our Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/gallary">Gallary</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="/contact">Contact</a>
        </li>

      </ul>
     
    </div>
    <?php endif; ?>
   
</nav>
<?= $this->renderSection('content') ?>
<!-- Footer -->
<footer class="footer mt-auto py-4 bg-dark">
  <!-- Grid container -->
  <div class="container p-4">
    
    

    
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="/" class="text-blue">Home</a>
            </li>
            <li>
              <a href="adminlogin" class="text-blue">Admin Login</a>
            </li>
            <li>
              <a href="userlogin" class="text-blue">User Login</a>
            </li>
            <li>
              <a href="ourrooms" class="text-blue">Our Rooms</a>
            </li>
            <li>
              <a href="gallary" class="text-blue">Gallary</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white">Contact Us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-blue"></a>
            </li>
            <li>
              <a href="#!" class="text-blue">ph no-8767991300</a>
            </li>
            <li>
              <a href="#!" class="text-blue">telephone-+024251431</a>
            </li>
            <li>
              <a href="#!" class="text-blue">twitter-@rushikesh</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white">Follow us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-blue">facebook</a>
            </li>
            <li>
              <a href="#!" class="text-blue">twitter</a>
            </li>
            <li>
              <a href="#!" class="text-blue">insta</a>
            </li>
            <li>
              <a href="#!" class="text-blue">linkdin</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">HotelMGMT</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>