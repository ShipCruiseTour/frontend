<?php
$noFooter = '';
include 'include/header.php' ?>

<div class="container login-page">
    <h1 class="text-center">
        <a href="login.php"><span class="selected" data-class="login">Login</span></a> |
        <a href="signup.php"><span class="selected" data-class="signup">Signup</span></a>
    </h1>
    <!-- Start Signup Form -->
    <form class="signup" action="" method="POST">
        <div class="input-container">
            <input pattern=".{4,}" title="Username Must Be Between 4 Chars" class="form-control" type="text"
                name="username" autocomplete="off" placeholder="Type your username" required />
        </div>
        <div class="input-container">
            <input minlength="4" class="form-control" type="password" name="password" autocomplete="new-password"
                placeholder="Type a Complex password" required />
        </div>
        <div class="input-container">
            <input minlength="4" class="form-control" type="password" name="password2" autocomplete="new-password"
                placeholder="Type a password again" required />
        </div>
        <div class="input-container">
            <input class="form-control" type="email" name="email" placeholder="Type a Valid email" />
        </div>
        <input class="btn btn-success btn-block" name="signup" type="submit" value="Signup" />
    </form>
</div>

<?php include 'include/footer.php' ?>