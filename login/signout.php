<?php 

session_start();
unset($_SESSION['user_name']);
unset($_SESSION['matkhau']);
 header('location: http://localhost/web%20job/admin/admin.php');