<?php
$_SESSION['users_id'] = null;
$_SESSION['name'] = null;
session_destroy();
header('location:index.php');
