<nav class="navbar navbar-expand-lg navbarMe">
  <div class="container-fluid containerME">
    <a class="navbar-brand logo" href="index.php"><img src="layout/images/ShipCruiseTour.png" alt="logo" class="logoImg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto ulMe">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link active" href="about.php">About</a>
        <a class="nav-link active" href="place.php">My place<b></b></a>
        <a class="nav-link active" href="contact.php">Contact Us</a>
      </div>
      <div style="margin-left: 0px !important;" class="navbar-nav ms-auto ulMe">
        <a class="nav-link dropdown-toggle aliMe" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <ul class="dropdown-menu dropMe">
          <?php if(isset($_SESSION['user_id'])): ?>
            <li><a class="dropdown-item aliMe" href="reservationCle.php">Vos Reservation</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item aliMe" href="logout.php">Logout</a></li>
            <?php else: ?>
          <li><a class="dropdown-item aliMe" href="login.php">Login</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item aliMe" href="signup.php">Signup</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</nav>