<?php 

if(empty($_POST['tennghe']) || empty($_POST['congty']) || empty($_POST['vitri']) || empty($_POST['mucluong']) || empty($_POST['kinhnghiem']) || empty($_POST['thoigian']) || empty($_POST['diadiem'])){
	header('location:form_insert.php?error=Phải Điền Đầy Đủ Thông Tin');
}
$tennghe = $_POST['tennghe'];
$congty = $_POST['congty'];
$vitri = $_POST['vitri'];
$mucluong = $_POST['mucluong'];
$kinhnghiem = $_POST['kinhnghiem'];
$thoigian = $_POST['thoigian'];
$diadiem = $_POST['diadiem'];

require '../dpconnect.php';
$sql = "insert into nghenghiep(tennghe,congty,vitri,mucluong,kinhnghiem,thoigian,diadiem)
values('$tennghe','$congty','$vitri','$mucluong','$kinhnghiem','$thoigian','$diadiem')";

mysqli_query($connect,$sql);
mysqli_close($connect);


header('location:nganhnghe.php?success=Thêm Thành Công');