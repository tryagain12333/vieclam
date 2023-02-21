<?php 

if(empty($_POST['hoten']) || empty($_POST['sdt']) || empty($_POST['email']) || empty($_POST['gioithieu']) || empty($_POST['tennghe']) || empty($_POST['congty']) || empty($_POST['vitri'])){
	header('location:form_insert.php?error=Phải Điền Đầy Đủ Thông Tin');
}
$hoten = $_POST['hoten'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$gioithieu = $_POST['gioithieu'];
$tennghe = $_POST['tennghe'];
$congty = $_POST['congty'];
$vitri = $_POST['vitri'];

require '../dpconnect.php';
$sql = "insert into cv(hoten,sdt,email,gioithieu,tennghe,congty,vitri)
values('$hoten','$sdt','$email','$gioithieu','$tennghe','$congty','$vitri')";

mysqli_query($connect,$sql);
mysqli_close($connect);


header('location:cv.php?success=Thêm Thành Công');