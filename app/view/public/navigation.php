<!-- PUBLIC MENU -->

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning fixed-top">

      <a class="navbar-brand" href="index.php">
        <img src="img/carIcon.png" alt="Ger Logo" style="width:40px;">
      </a>
        
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <!-- wrapper for collapsing nav bar -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo "$menuActive_index"; ?>" href="index.php">Home</a>
        </li>
      </ul> 
        
      <ul class="nav nav-button ml-auto">
        <li><button class="btn btn-info" type="button" style="font-size: medium;" onclick="location.href='login.php'">Log in </i></button></li>

      </ul>
          
      </div>
        
    </nav>           
