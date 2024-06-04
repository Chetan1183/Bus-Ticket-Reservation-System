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
                            <a href = "user_dashboard" class = "nav-link">UserDashboard</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "checkavailability" class = "nav-link">Check Availability</a>
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
          <a class="nav-link"  href="logout">Logout</a>
        </li>
                    </ul>
                    
     
      
                </div>
            </div>
        </nav>
        <?php elseif (session()->get('isAdminLoggedIn')): ?>
        <nav class = "navbar">
            <div class = "container flex">
           <div class="col-12">
            <h1 >Logged in As-<?=session()->get("admin_name")?></h1>
        </div>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "admin_dashboard" class = "nav-link">Admin Dashboard</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/index" class = "nav-link">Manage Bus</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/admin/bookings" class = "nav-link">Manage Bookings</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact" class = "nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
          <a class="nav-link"  href="logout">Logout</a>
        </li>
                        
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
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>About</h1>
                    <p>BUS Tickets is the largest online bus ticket booking service in the world. Trusted by more than 8 million customers globally. Bus Tickets offers booking bus tickets through the website.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- about section -->
        <section id = "about" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">things to know about us</span>
                    <h2 class = "lg-title">our story</h2>
                </div>

                <div class = "about-row">
                    <div class = "about-left my-2">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/about-img.jpg" alt = "about img">
                    </div>
                    <div class = "about-right">
                        <h2>15 Years of Experience</h2>
                        <p class = "text">Bus Ticket Reservation is the world's largest online bus ticket booking service trusted by over 25 million happy customers globally. redBus offers bus ticket booking through its website,iOS and Android mobile apps for all major routes.</p>
                        <p class = "text"></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- facts section -->
        <section id = "facts" class = "py-4 flex">
            <div class = "container">
                <div class = 'title-wrap'>
                    <span class = "sm-title">know some facts about our agency</span>
                    <h2 class = "lg-title">fun facts</h2>
                </div>

                <div class = "facts-row">
                    <div class = "facts-item">
                        <span class = "fas fa-camera-retro facts-icon"></span>
                        <div class = "facts-info">
                            <strong>1220</strong>
                            <p class = "text">Photos Taken</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-umbrella-beach  facts-icon"></span>
                        <div class = "facts-info">
                            <strong>450</strong>
                            <p class = "text">States Visited</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-mountain facts-icon"></span>
                        <div class = "facts-info">
                            <strong>84</strong>
                            <p class = "text">Mountains Climbed</p>
                        </div>
                    </div>

                    <div class = "facts-item">
                        <span class = "fas fa-ship facts-icon"></span>
                        <div class = "facts-info">
                            <strong>120</strong>
                            <p class = "text">Cruises Organized</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of facts section -->
        

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "/" class = "site-brand">
                    BUS TICKET RESERVATION
                    </a>
                    <p class = "text">BUS Tickets is the largest online bus ticket booking service in the world. Trusted by more than 8 million customers globally. Bus Tickets offers booking bus tickets through the website.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow Us On: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "https://www.facebook.com/">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Freels%2FCmvkbYOBIGa%2F%3F__coig_login%3D1">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://twitter.com/login">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://in.pinterest.com/">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.google.com/search?q=google+&sxsrf=APwXEddJNlt5w5mrXGQnW7g2z0R5JgZWcw%3A1682513498954&ei=Wh5JZKX1OaHm4-EP-e2QyA0&ved=0ahUKEwilir2by8f-AhUh8zgGHfk2BNkQ4dUDCA8&uact=5&oq=google+&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIECCMQJzIECCMQJzIHCAAQigUQQzINCAAQigUQsQMQgwEQQzIFCAAQgAQyBQgAEIAEMgcIABCKBRBDMgsIABCABBCxAxCDATIFCAAQgAQ6CggAEEcQ1gQQsAM6CggAEIoFELADEEM6DQgAEOQCENYEELADGAE6FQguEIoFEMcBENEDEMgDELADEEMYAjoHCCMQsQIQJzoQCAAQgAQQsQMQgwEQsQMQCjoKCAAQgAQQsQMQCjoKCAAQgAQQAhDLAToHCAAQgAQQCjoNCAAQgAQQFBCHAhCxAzoICAAQgAQQsQM6CggAEIAEEBQQhwJKBAhBGABQ1gRY-wxgyhJoAXABeACAAeYBiAHqCZIBBTAuMi40mAEAoAEByAETwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz-serp">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Buses:</h2>
                    <ul>
                        <li><a href = "#">Omkar Travels</a></li>
                        <li><a href = "#">Chetan Coach</a></li>
                        <li><a href = "#">Mangesh Travels</a></li>
                        <li><a href = "#">Shubham Travels</a></li>
                        <li><a href = "#">Mayur Tours</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>