<?php
$noNavbar = '';
include 'include/header.php' ?>

<div class="container login-page">
    <h1 class="text-center">
        <span class="selected" data-class="login">Admin Login</span>
    </h1>
    <!-- Start Login Form -->
    <form class="login" action="home.php" method="POST">
        <div class="input-container">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Type your username"
                required />
        </div>
        <div class="input-container">
            <input class="form-control" type="password" name="password" autocomplete="new-password"
                placeholder="Type your password" required />
        </div>
        <input class="btn btn-primary btn-block" name="login" type="submit" value="Login" />
    </form>
    <!-- End Login Form -->
</div>

<?php include 'include/footer.php' ?>