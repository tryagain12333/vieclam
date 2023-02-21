<?php 

if(empty($_POST['tennghe'])){
	header('location:index.php?success=Phải truyền mã để sửa');
     exit;
 }


$tennghe = $_POST['tennghe'];

if(empty($_POST['tennghe']) || empty($_POST['congty']) || empty($_POST['vitri']) || empty($_POST['mucluong']) || empty($_POST['kinhnghiem']) || empty($_POST['thoigian']) || empty($_POST['diadiem'])){
	header("location:form_update.php?tennghe=$tennghe&loi=Phải Điền Đầy Đủ Thông Tin");
	exit;
}

$tennghe = $_POST['tennghe'];
$congty = $_POST['congty'];
$vitri = $_POST['vitri'];
$mucluong = $_POST['mucluong'];
$kinhnghiem = $_POST['kinhnghiem'];
$thoigian = $_POST['thoigian'];
$diadiem = $_POST['diadiem'];

require '../dpconnect.php';
$sql = "update nghenghiep
set
tennghe = '$tennghe',
congty = '$congty',
vitri = '$vitri',
mucluong = '$mucluong'
kinhnghiem = '$kinhnghiem'
thoigian = '$thoigian'
diadiem = '$diadiem'
where
tennghe = '$tennghe'
";
mysqli_query($connect,$sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if(empty($error)){
	header('location:index.php?success=Sửa Thành Công');
}else {
	header("location:form_update.php?id=$id$error=Lỗi truy vấn");

}
