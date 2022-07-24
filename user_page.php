<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="About_user.html" class="btn">Engineers</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>











 



   <div class="page-wrapper toggled">
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <a href="#" id="toggle-sidebar"><i class="fa fa-bars"></i></a>
      <div class="sidebar-brand">
        <a href="#">DRDO</a>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://www.drdo.gov.in/sites/default/files/subsite_banner_image/new_drdo_logo.png" width="54px" alt="">
        </div>
        <div class="user-info">
          <span class="user-name"><?php echo $_SESSION['user_name'] ?></span>
          <span class="user-role">Hi user!</span>
          <div class="user-status">
            <a href="#">
              <i class="fa fa-circle"></i>
              <span>Online</span></a>
          </div>
        </div>
      </div>


     
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu"><span>General</span></li>
          <li class="sidebar-dropdown">
            <a href="user_page.php"><i class="fa fa-dashboard"></i><span>Home</span></a>
            
          </li>
          <li class="sidebar-dropdown">
            <a href="About_user.html"><i class="fa fa-shopping-cart"></i><span>Engineers</span></a>
          </li>
          
          <li class="sidebar-dropdown">
            <a href="contact.html"><i class="fa fa-bar-chart-o"></i><span>Contact Us</span></a>
          </li>

          <li class="sidebar-dropdown">
            <a href="https://www.google.com/maps/@27.185087,78.0081215,15z"><i class="fa fa-globe"></i><span>Maps</span></a>
          </li>
         


      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

    <div class="sidebar-footer">
      <a href="https://www.instagram.com/accounts/login/" ><img src="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-background-hd-3.png" width="30px" ></a>
      <br>
      <a href="https://twitter.com/?lang=en-in" ><img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" width="35px" ></a>
      <br>
      <a href="https://www.youtube.com/" ><img src="https://www.freepnglogos.com/uploads/youtube-logo-png-transparent-background-download-3.png" width="35px" ></a>

      <a href="https://www.facebook.com/" ><img src="https://www.freepnglogos.com/uploads/facebook-logo-f-png-27.png" width="35px"></a>

    </div>
  </nav>
        
      </div>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->











</body>
</html>