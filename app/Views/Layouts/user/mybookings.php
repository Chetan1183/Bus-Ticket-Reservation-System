
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BUS TICKET RESERVATION</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "tripboss_travelagency_site_html_css_js-master/font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "tripboss_travelagency_site_html_css_js-master/css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "tripboss_travelagency_site_html_css_js-master/css/utility.css">
        <link rel = "stylesheet" href = "tripboss_travelagency_site_html_css_js-master/css/style.css">
        <link rel = "stylesheet" href = "tripboss_travelagency_site_html_css_js-master/css/responsive.css">
     
    </head>
    <body>
        <!-- navbar  -->
        <?php if (session()->get('isLoggedIn')): ?>
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "/" class = "site-brand">
                BUS TICKET<span> RESERVATION</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "user_dashboard" class = "nav-link">User Dashboard</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "checkavailability" class = "nav-link">Check Aailability</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/mybookings" class = "nav-link">My bookings</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact" class = "nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
          <a class="nav-link"  href="/logout">Logout</a>
        </li>
                        
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
    
      </ul>
                </div>
            </div>
        </nav>
        <?php else:?>
          <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                BUS TICKET RESERVATION
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "/" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "userlogin" class = "nav-link">User Login</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "adminlogin" class = "nav-link">Admin Login</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact" class = "nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php endif; ?>
        <!-- header -->
        <header class = "flex">
        
               
                <!-- <div class = "header-form">
                    <h2>Choose Your Destination:</h2> -->
                    <!-- <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Destination name">
                        <input type="date" class = "form-control" placeholder="Date">
                        <input type="number" class = "form-control" placeholder="Price ($)">
                        <input type="submit" class = "btn" value = "Search">
                    </form>
                </div> -->
                <table  border="1" style="border-collapse: collapse;">
  <thead class="thead-dark" >
    <tr>
      <th scope="col" width="5%">BusNo</th>
      <th scope="col" width="20%">Bus Name</th>
      <th scope="col" width="15%">pickup_point</th>
      <th scope="col" width="15%">Bus Destination</th>
      <th scope="col" width="10%">no_of_seats</th>

     
    
      <th scope="col" width="15%">Bus Time</th>
      <th scope="col" width="20%">Bus status</th>
    
      
 
</tr>

    </tr>


  </thead>

  <tbody>
    <?php
    if (count($booking1) > 0) {
      foreach ($booking1 as $bus) {
    ?>
<!-- 'bus_name','bus_number','bus_capacity','bus_status','origin','destination','departure','price' -->

        <tr>
          <th scope="row"><?= $bus['bus_number'] ?></th>
          <td><?= $bus['bus_name'] ?></td>
          <td><?= $bus['origin'] ?></td>
          <td><?= $bus['destination'] ?></td>
          <td><?= $bus['no_of_seats'] ?></td>
          <td><?= $bus['departure'] ?></td>
          <td><?= $bus['status'] ?></td>
          
        </tr>

      <?php
      }
    } else { ?>
      <tr>
        <td>No data found.</td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
           
         </div>
        </header>
        <!-- header -->

       
        <script src = "tripboss_travelagency_site_html_css_js-master/js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
        
    </body>
</html>