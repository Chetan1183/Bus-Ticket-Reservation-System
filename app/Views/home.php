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
                            <a href = "/" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/adminlogin" class = "nav-link">Admin login</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "/userlogin" class = "nav-link">User Login</a>
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
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Book Your Seat Today</h1>
                    <p>Now finding bus tickets is easier, you can order online at BTBS. No need to bother going to the terminal or agent office, now you can buy tickets easily. Fast and Easy Booking. Free to Choose Seats. Cheapest Every Day. 24/7 Customer Service. All Classes and Routes.</p>
                </div>
                <!-- <div class = "header-form">
                    <h2>Choose Your Destination:</h2> -->
                    <!-- <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Destination name">
                        <input type="date" class = "form-control" placeholder="Date">
                        <input type="number" class = "form-control" placeholder="Price ($)">
                        <input type="submit" class = "btn" value = "Search">
                    </form>
                </div> -->
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Know About Some Places Before Your Travel</span>
                    <h2 class = "lg-title">Our Bus Images</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-reo-de-janeiro-brazil.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                        
                            <div>
                     
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-north-bondi-australia.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                           
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-berlin-germany.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                          
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-khwaeng-wat-arun-thailand.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                               
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-rome-italy.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                          
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "tripboss_travelagency_site_html_css_js-master/images/featured-fuvahmulah-maldives.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotel</h3>
                        <p class = "text">What’s more, if you book directly through us, you could save up to 38% on a stay at our award-winning resort and private residences. Click ‘Book Now’ to browse our special offers and packages to see how much you can save.</p>
                        <a href = "#" class = "btn">Read More</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Travel Guide</h3>
                        <p class = "text">
A travel guide can include information on the various sites, hotels, restaurants, transportation, and activities that may be of interest to a visitor. Sometimes known as guidebooks, travel guides can also include information on a country's culture, currency, and language for international travelers.</p>
                        <a href = "#" class = "btn">Read More</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-money-bill"></i>
                        </span>
                        <h3>Suitable Price</h3>
                        <p class = "text">get your bus and hotel in very affordable price</p>
                        <a href = "#" class = "btn">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">What Our Clients Say About Us</span>
                    <h2 class = "lg-title">Testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">The company itself is a very successful company. Acceptance of flattery, harsher, he wants them to seek the times of great offices, in which he will be able to do expediently with refusals, for pleasure is less just to him. Selected!</p>
                        <div class = "test-item-info">
                            <img src = "tripboss_travelagency_site_html_css_js-master/images/test-1.jpg" alt = "testimonial">
                            <div>
                                <h3>Chetan Chaudhari</h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">The customer himself, the customer will be able to pursue the adipiscing of the company. But to be bound by these pains, they leave them. Most of all, the consequences of refusing to run away from us are just born to some people!</p>
                        <div class = "test-item-info">
                            <img src = "tripboss_travelagency_site_html_css_js-master/images/test-2.jpg" alt = "testimonial">
                            <div>
                                <h3>Omkar Deshmukh</h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">If the customer is very smart, he or she will be able to achieve the desired result. What is said by a wise man is not easy, but for those who are present, whom I prefer but to some! No one is to blame for refusing to provide that!</p>
                        <div class = "test-item-info">
                            <img src = "tripboss_travelagency_site_html_css_js-master/images/test-3.jpg" alt = "testimonial">
                            <div>
                                <h3>Mangesh Dagale</h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "tripboss_travelagency_site_html_css_js-master/videos/video-section.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

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
                    <h2>Subscribe For Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
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