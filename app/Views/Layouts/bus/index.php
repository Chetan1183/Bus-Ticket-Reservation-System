

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
        <?php if (session()->get('isAdminLoggedIn')): ?>
        <nav class = "navbar">
            <div class = "container flex">
           <div class="col-12">
            <h1>Logged in As-<?=session()->get("admin_name")?></h1>
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
                            <a href = "user_dashboard" class = "nav-link">Admin Dashboard</a>
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
                <

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
          
               
        

<div class="actionbutton mt-2">
<a class="btn btn-info float-right mb20" href="<?=site_url('buscreate')?>">Add</a>
</div>
<br>
<?php 
// Display Response
if(session()->has('message')){
?>
<div class="alert <?= session()->getFlashdata('alert-class') ?>">
  <?= session()->getFlashdata('message') ?>
</div>
<?php
}
?>

<!-- Subject List -->
<table width="100%" border="1" style="border-collapse: collapse;">
<thead>
<tr>

  <th width="10%">Bus Name</th>
  <th width="10%">Bus Number</th>
  <th width="10%">Bus Capacity</th>
  <th width="10%">Bus Status</th>
  <th width="10%">Bus ORIGIN</th>
  <th width="10%">Bus destination</th>
  <th width="10%">Bus departure</th>
  <th width="10%">Bus price</th>
  <th width="20%">&nbsp;</th>
</tr>
</thead>
<tbody>
<?php 
if(count($bus) > 0){

foreach($bus as $bus){
?>
 <tr>
   <td><?= $bus['bus_name'] ?></td>
   <td><?= $bus['bus_number'] ?></td>
   <td><?= $bus['bus_capacity'] ?></td>
   <td><?= $bus['bus_status'] ?></td>
    <td><?= $bus['origin'] ?></td>
    <td><?= $bus['destination'] ?></td>
    <td><?= $bus['departure'] ?></td>
    <td><?= $bus['price'] ?></td>
   <td align="center"  style="height:50px">
     <a class="btn  " href="<?= site_url('busedit/'.$bus['bus_id']) ?>">Edit</a>
     <a class="btn  " href="<?= site_url('busdelete/'.$bus['bus_id']) ?>">Delete</a>
   </td>
 </tr>
<?php
}

}else{
?>
<tr>
  <td colspan="4">No data found.</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
                <div class="container">
  
       
 
</div>
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
