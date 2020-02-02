<!-- PRIVATE MENU -->

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top">

      <a class="navbar-brand" href="home.php">
        <img src="img/carIcon.png" alt="Ger Logo" style="width:40px;">
      </a>
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo "$menuActive_home"; ?>" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo "$menuActive_bookings"; ?>" href="list_bookings.php">Your Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo "$menuActive_newbooking"; ?>" href="new_booking_main.php">New Booking</a>
        </li>
      </ul> 
      <ul class="nav nav-button ml-auto">
      <li><?php echo "<div>Welcome <br><b>$login_cookie</b>!</div>"; ?></li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li><button class="btn btn-info" type="button" style="font-size: medium;" onclick="location.href='logout.php'">Sign Out <i class="fa fa-arrow-circle-right ml-2"></i></button></li>
      </ul>
          
      </div>
        
    </nav>           
        
