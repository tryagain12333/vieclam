<?php

$user_name = $_POST['user_name'];
$matkhau = $_POST['matkhau'];

require 'dpconnect.php';
$sql = "select * from dangnhap
where user_name = '$user_name' and matkhau = '$matkhau'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1){
	session_start();
    $each = mysqli_fetch_array($result);      
	$_SESSION['user_name'] = $each['user_name'];
	$_SESSION['matkhau'] = $each['matkhau'];


	header('location:admin.php');
	exit;
}
header('location:login.php?error=Dang nhap khong thanh cong do sai tai khoan hoac sai mat khau');
